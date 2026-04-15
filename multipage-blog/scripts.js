document.addEventListener('DOMContentLoaded', () => {
  const currentPath = window.location.pathname.split('/').pop();
  const navLinks = document.querySelectorAll('header nav a');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath || (currentPath === '' && link.getAttribute('href') === 'index.html')) {
      link.classList.add('active');
    }
  });

  const body = document.body;
  const themeToggle = document.querySelector('#theme-toggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      body.classList.toggle('dark-mode');
    });
  }
});

// Add any additional blog interactions here.
