document.addEventListener('DOMContentLoaded', () => {
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';

  document.querySelectorAll('header nav a').forEach(link => {
    if (link.getAttribute('href') === currentPath) link.classList.add('active');
  });

  const scrollNav = document.getElementById('scrollNav');
  const scrollToggle = document.getElementById('scrollToggle');
  const scrollPanel = document.getElementById('scrollPanel');

  if (!scrollToggle || !scrollPanel) return;

  scrollPanel.querySelectorAll('a').forEach(link => {
    if (link.getAttribute('href') === currentPath) link.classList.add('scroll-active');
  });

  scrollToggle.addEventListener('click', () => {
    const isOpen = scrollNav.classList.toggle('open');
    scrollPanel.classList.toggle('open', isOpen);
    scrollToggle.setAttribute('aria-expanded', isOpen);
    scrollPanel.setAttribute('aria-hidden', !isOpen);
  });

  document.addEventListener('click', (e) => {
    if (!scrollNav.contains(e.target) && scrollNav.classList.contains('open')) {
      scrollNav.classList.remove('open');
      scrollPanel.classList.remove('open');
      scrollToggle.setAttribute('aria-expanded', 'false');
      scrollPanel.setAttribute('aria-hidden', 'true');
    }
  });
});
