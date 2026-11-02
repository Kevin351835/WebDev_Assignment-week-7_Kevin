document.addEventListener('DOMContentLoaded', () => {

  const menu = document.getElementById('collapseMenu');
  const overlay = document.getElementById('overlay');
  const openBtn = document.getElementById('toggleOpen');
  const closeBtn = document.getElementById('toggleClose');

  if (menu && openBtn && closeBtn) {
    const toggleMenu = (show) => {
      menu.classList.toggle('hidden', !show);
      overlay.classList.toggle('hidden', !show);
      openBtn.setAttribute('aria-expanded', String(show));
    };
    openBtn.addEventListener('click', () => toggleMenu(true));
    closeBtn.addEventListener('click', () => toggleMenu(false));
    overlay.addEventListener('click', () => toggleMenu(false));
    document.addEventListener('keydown', (e) => e.key === 'Escape' && toggleMenu(false));
  }

  const root = document.documentElement;
  const updateProgress = () => {
    root.style.setProperty('--progress', 0);
  };
  updateProgress();

  const items = document.querySelectorAll('.reveal');
  items.forEach((el) => el.classList.add('is-visible'));

  const typed = document.getElementById('typed');
  if (typed) {
    typed.textContent = 'Mahasiswa UC Makassar';
  }
});