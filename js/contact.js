// Compose le lien mailto en encodant les accents et les retours à la ligne.
function buildContactMail(recipient, values, services) {
  const subject = services.length
    ? `Demande : ${services.join(', ')}`
    : 'Une demande de coup de main';
  const body = [
    'Bonjour Estelle,',
    '',
    `Services : ${services.length ? services.join(', ') : 'À préciser ensemble'}`,
    '',
    values.message.trim(),
    '',
    `Nom : ${values.name.trim()}`,
    `E-mail : ${values.email.trim()}`,
    `Téléphone : ${values.phone.trim() || 'Non renseigné'}`,
    `Commune : ${values.town.trim() || 'Non renseignée'}`,
  ].join('\r\n');

  return `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
}

// Préremplit le service choisi depuis une carte, puis conserve les choix des groupes fermés.
const form = document.querySelector('#contact-form');
if (form) {
  const groups = [...form.querySelectorAll('.service-choices')];
  const choices = [...form.querySelectorAll('input[name="services[]"]')];
  const requestedService = new URLSearchParams(window.location.search).get('service');
  const requestedChoice = choices.find((choice) => choice.value === requestedService);

  if (requestedChoice) {
    requestedChoice.checked = true;
    const requestedGroup = requestedChoice.closest('details');
    groups.forEach((group) => {
      group.open = group === requestedGroup;
    });
  }

  // Un seul accordéon reste ouvert ; les cases cochées ne sont jamais réinitialisées.
  groups.forEach((group) => {
    group.addEventListener('toggle', () => {
      if (group.open) {
        groups.forEach((otherGroup) => {
          if (otherGroup !== group) {
            otherGroup.open = false;
          }
        });
      }
    });
  });

  function updateSelectionCounts() {
    groups.forEach((group) => {
      const count = group.querySelectorAll('input:checked').length;
      group.querySelector('.selected-count').textContent = count
        ? `(${count} sélectionné${count > 1 ? 's' : ''})`
        : '';
    });
  }

  choices.forEach((choice) => choice.addEventListener('change', updateSelectionCounts));
  updateSelectionCounts();

  // Ouvre un brouillon dans la messagerie, sans annoncer un envoi réussi.
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (!form.reportValidity()) {
      return;
    }

    const values = Object.fromEntries(
      ['name', 'email', 'phone', 'town', 'message'].map((key) => [
        key,
        form.elements.namedItem(key).value,
      ]),
    );
    const selectedServices = choices
      .filter((choice) => choice.checked)
      .map((choice) => choice.dataset.label);
    const mail = buildContactMail(form.dataset.recipient, values, selectedServices);
    const status = document.querySelector('#form-status');
    status.textContent =
      'Votre brouillon est prêt. Relisez-le et envoyez-le depuis votre messagerie. Si elle ne s’ouvre pas, utilisez l’adresse affichée sur cette page ; vos saisies restent dans le formulaire.';
    window.location.href = mail;
  });
}
