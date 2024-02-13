document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("loading-overlay").style.display = "none";
});


const sr = ScrollReveal({
    reset: true, 
    duration: 1000,
    distance: '50px',
    origin: 'bottom',
  });
  
  sr.reveal('.section_1 h1');
  sr.reveal('.section_1 p', { delay: 500 });
  sr.reveal('.section_1 form', { delay: 1000 });
  sr.reveal('.section_1 a', { delay: 1500 });
  
  const sr1 = ScrollReveal({
    reset: true, 
    duration: 1200,
    distance: '50px',
    origin: 'left', 
});

sr1.reveal('.section_2 .main_header'); 
sr1.reveal('.section_2 p', { delay: 500 });
sr1.reveal('.section_2 .container .cont', { interval: 300, origin: 'left' }); 
sr1.reveal('.section_2 .image img', { delay: 1000, origin: 'left' });



  function smoothScroll(targetId) {
    const targetElement = document.getElementById('section2');

    if (targetElement) {
      const offset = targetElement.getBoundingClientRect().top + window.scrollY;
      window.scrollTo({
        top: offset,
        behavior: 'smooth'
      });
    }
  }

  document.querySelector('.arrow a').addEventListener('click', function (event) {
    event.preventDefault();
    smoothScroll('second-section');
  });
