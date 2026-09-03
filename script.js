// Année dynamique dans le footer
document.getElementById('year').textContent = new Date().getFullYear();

// Menu burger mobile
const toggle = document.querySelector('.nav-toggle');
const nav    = document.getElementById('main-nav');

if (toggle && nav) {
  toggle.addEventListener('click', () => {
    const open = nav.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open);
  });

  // Ferme le menu mobile au clic sur un lien
  nav.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      nav.classList.remove('open');
      toggle.setAttribute('aria-expanded', false);
    });
  });
}

// Validation et envoi du formulaire de contact
// (protégé par "if (form)" : ce script est chargé sur toutes les pages,
// mais seule la page d'accueil a le formulaire — sans ce garde-fou,
// une page comme mentions-legales.html ferait planter tout le script.)
const form   = document.getElementById('contact-form');
const notice = document.getElementById('form-notice');

if (form) {
  form.addEventListener('submit', e => {
    e.preventDefault();
    notice.className = 'form-notice';
    notice.textContent = '';

    const nom     = form.nom.value.trim();
    const email   = form.email.value.trim();
    const message = form.message.value.trim();

    if (!nom || !email || !message) {
      notice.className = 'form-notice error';
      notice.textContent = 'Merci de remplir au moins votre nom, votre email et votre message.';
      return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      notice.className = 'form-notice error';
      notice.textContent = "L'adresse email ne semble pas valide.";
      return;
    }

    // Simule un envoi réussi (à remplacer par un vrai fetch vers un endpoint)
    notice.className = 'form-notice success';
    notice.textContent = '✓ Message envoyé ! Je vous réponds dès que possible.';
    form.reset();
  });
}
