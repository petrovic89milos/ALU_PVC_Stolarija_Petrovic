const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  hamburger.classList.toggle("open");
});

const faders = document.querySelectorAll(".fade-in");

const appearOnScroll = () => {
  faders.forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 50) {
      el.classList.add("visible");
    } else {
      el.classList.remove("visible"); 
    }
  });
};

window.addEventListener("scroll", appearOnScroll);
appearOnScroll(); 

const counters = document.querySelectorAll(".stat h3");
const speed = 300; 

const isInViewport = (element) => {
  const rect = element.getBoundingClientRect();
  return rect.top < window.innerHeight && rect.bottom >= 0;
};

const runCounters = () => {
  counters.forEach(counter => {
    if (!counter.classList.contains("counted") && isInViewport(counter)) {
      counter.classList.add("counted");
      const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = Math.ceil(target / speed);

        if (count < target) {
          counter.innerText = count + increment;
          setTimeout(updateCount, 25); 
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    }
  });
};

window.addEventListener("scroll", runCounters);
runCounters();

const filterBtns = document.querySelectorAll('.filter-btn');
const projekti = document.querySelectorAll('.projekat-card');

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const filter = btn.dataset.filter;

    projekti.forEach(p => {
      if(filter === 'svi' || p.dataset.category === filter) {
        p.style.display = 'block';
        p.classList.add('fade-in');
        setTimeout(() => p.classList.add('visible'), 50);
      } else {
        p.style.display = 'none';
        p.classList.remove('visible');
      }
    });
  });
});
