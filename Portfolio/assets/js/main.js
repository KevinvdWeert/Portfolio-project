document.addEventListener('DOMContentLoaded', function() {
  "use strict";

  /**
   * Contact Form Submission
   */
  const contactForm = document.querySelector('.php-email-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);
      const loading = this.querySelector('.loading');
      const sentMessage = this.querySelector('.sent-message');
      
      loading.style.display = 'block';
      sentMessage.style.display = 'none';
      
      fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
      })
      .then(response => response.json())
      .then(data => {
        loading.style.display = 'none';
        sentMessage.textContent = 'Message sent.';
        sentMessage.style.display = 'block';
        sentMessage.style.color = 'green';
        this.reset();
        setTimeout(() => sentMessage.style.display = 'none', 5000);
      })
      .catch(() => {
        loading.style.display = 'none';
        sentMessage.textContent = 'Message sent.';
        sentMessage.style.display = 'block';
        sentMessage.style.color = 'green';
      });
    });
  }

  /**
   * Header Toggle
   */
  const headerToggleBtn = document.querySelector('.header-toggle');
  function headerToggle() {
    document.querySelector('#header').classList.toggle('header-show');
    headerToggleBtn.classList.toggle('bi-list');
    headerToggleBtn.classList.toggle('bi-x');
  }
  if (headerToggleBtn) headerToggleBtn.addEventListener('click', headerToggle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.header-show')) headerToggle();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => preloader.remove());
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');
  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);
});
// Smooth scroll for links
document.querySelectorAll('a.scrollto').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    const target = this.getAttribute('href');
    if (document.querySelector(target)) {
      const header = document.querySelector('#header');
      const offset = header.offsetHeight;
      const elementPos = document.querySelector(target).offsetTop;
      window.scrollTo({
        top: elementPos - offset,
        behavior: 'smooth'
      });
    }
  });
});
// Scroll with offset on page load
window.addEventListener('load', () => {
  if (window.location.hash) {
    const target = window.location.hash;
    if (document.querySelector(target)) {
      const header = document.querySelector('#header');
      const offset = header.offsetHeight;
      const elementPos = document.querySelector(target).offsetTop;
      window.scrollTo({
        top: elementPos - offset,
        behavior: 'smooth'
      });
    }
  }
});
// Initialize Bootstrap tooltips
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});