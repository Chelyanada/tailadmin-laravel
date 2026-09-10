(function(){

    AOS.init({ once: true });

    // NAVBAR SCROLL EFFECT
    const navbar = document.getElementById('navbar');
    let lastScrollY = 0;

    // FUNCTION UPDATE NAVBAR
    function updateNavbar(){
        const scrollY = window.scrollY;

        if(scrollY > 50){
            navbar.classList.add('bg-[#2C3E50]', 'shadow-sm');
        }
        else{
            navbar.classList.remove('bg-[#2C3E50]', 'shadow-sm');
        }

        lastScrollY = scrollY;
    }

    window.addEventListener('scroll' , updateNavbar, {passive:true});
    updateNavbar();

    // Menu Toggle
    const menuToogle = document.getElementById('menu-toogle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');

    let menuOpen = false;

    function openMenu(){
        menuOpen = true;
        mobileMenu.classList.remove('max-h-0', 'opacity-0', 'pointer-events-none');
        mobileMenu.classList.add('max-h-[500px]', 'opacity-100', 'pointer-events-auto');
        menuIconOpen.classList.add('hidden');
        menuIconClose.classList.remove('hidden');

    }

    function closeMenu(){
        menuOpen = false;
        mobileMenu.classList.add('max-h-0', 'opacity-0', 'pointer-events-none');
        mobileMenu.classList.remove('max-h-[500px]', 'opacity-100', 'pointer-events-auto');
        menuIconOpen.classList.remove('hidden');
        menuIconClose.classList.add('hidden');
    }

    menuToogle.addEventListener('click',function(){
       menuOpen ? closeMenu() : openMenu();
        
    })
    
  // ===== METRICS COUNTER ANIMATION =====
  const metricSection = document.getElementById('metrics');
  const counters = document.querySelectorAll('.metric-counter');
  let countersAnimated = false;

  function animateCounters() {
    if (countersAnimated) return;
    const rect = metricSection.getBoundingClientRect();
    const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
    if (!isVisible) return;

    countersAnimated = true;
    counters.forEach(function(counter) {
      const target = parseInt(counter.getAttribute('data-target'), 10);
      const duration = 2000;
      const step = target / (duration / 16);
      let current = 0;

      function updateCounter() {
        current += step;
        if (current < target) {
          counter.textContent = Math.floor(current) + '+';
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target + '+';
        }
      }
      updateCounter();
    });
  }

  window.addEventListener('scroll', animateCounters, { passive: true });
  animateCounters();


  // ===== PORTFOLIO SWIPER (MOBILE) =====
  let portfolioSwiper = null;

  function initPortfolioSwiper() {
    if (window.innerWidth < 768) {
      if (!portfolioSwiper) {
        portfolioSwiper = new Swiper('#portfolio-swiper', {
          slidesPerView: 1.2,
          spaceBetween: 20,
          slidesOffsetBefore: 24,
          grabCursor: true,
          resistanceRatio: 0,
          watchOverflow: true,
          watchSlidesProgress: true,
          pagination: {
            el: '#portfolio-swiper .swiper-pagination',
            clickable: true,
          },
        });
      }
    } else {
      if (portfolioSwiper) {
        portfolioSwiper.destroy(true, true);
        portfolioSwiper = null;
      }
    }
  }

  initPortfolioSwiper();
  window.addEventListener('resize', function() {
    initPortfolioSwiper();
  });

  // ===== PORTFOLIO FILTER =====
  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioGrid = document.getElementById('portfolio-grid');

  filterButtons.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterButtons.forEach(function(b) { b.classList.remove('active', 'bg-primary', 'text-white'); b.classList.add('bg-surface', 'text-primary'); });
      btn.classList.add('active', 'bg-primary', 'text-white');
      btn.classList.remove('bg-surface', 'text-primary');

      const filter = btn.getAttribute('data-filter');
      const items = portfolioGrid.querySelectorAll('[data-category]');

      items.forEach(function(item) {
        if (filter === 'all' || item.getAttribute('data-category').includes(filter)) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });


})();       