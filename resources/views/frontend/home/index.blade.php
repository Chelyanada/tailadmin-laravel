@extends('frontend.layout');

@section('content')
  <section id="hero" class="hero-bg relative h-screen flex items-center justify-start text-white">
      <div class="hero-overlay absolute inset-0 z-10"></div>
      <div class="relative z-20 text-start max-w-4xl mt-0 lg:mt-20 px-6">
        <p data-aos="fade-down" data-aos-duration="600" class="text-accent text-sm md:text-md font-normal uppercase mb-4 mt-20 tracking-[0.20em]">Precision Engineering</p>
        <h1 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" class="text-3xl md:text-5xl lg:text-6xl font-black leading-tight text-white mb-4 ">ALUMINIUM SOLUTIONS FOR MODERN ARCHITECTURE</h1>
        <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" class="text-sm md:text-lg mb-10 leading-relaxed text-white/80 max-w-xl border-l-4 border-accent pl-3">Delivering highly engineered curtain walls, facade systems, and architectural aluminium specifically tailored for commercial and high-end residential developments.</p>
        <a href="" class="text-xs bg-accent px-8 py-4">GET QUOTE</a>
        <a href="" class="group inline-block bg-transparent shadow-[inset_0_0_0_1px_rgb(255,255,255)] text-white font-normal uppercase tracking-[0.10em] text-xs px-8 py-4 transition-colors hover:bg-white hover:border-transparent hover:text-accent">OUR PROJECTS <i class="fa-solid fa-arrow-right text-[12px] px-1 transition-transform duration-200 group-hover:translate-x-1"></i></a>
      </div>
    </section>

    <section id="metrics" class="bg-surface py-20">
      <!-- Grid Metrics -->
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 px-6 max-w-7xl mx-auto text-center">
        <!-- Grid Wrapper -->
         <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="0" class="">
          <!-- Grid Content -->
           <div class="font-black text-4xl lg:text-5xl text-primary metric-counter" data-target="500">500+</div>
           <p class="font-bold uppercase text-primary/60 text-sm lg:text-base tracking-widest">Proyek Selesai</p>
         </div>
         <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" class="">
           <div class="font-black text-4xl lg:text-5xl text-primary metric-counter" data-target="15">15+</div>
           <p class="font-bold uppercase text-primary/60 text-sm lg:text-base tracking-widest">Tahun Pengalaman</p>
         </div>
        <!-- Grid Wrapper -->
         <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="200" class="">
          
           <div class="font-black text-4xl lg:text-5xl text-primary metric-counter" data-target="200">200+</div>
           <p class="font-bold uppercase text-primary/60 text-sm lg:text-base tracking-widest">Klien Korporat</p>
         </div>
        <!-- Grid Wrapper -->
         <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" class="">
          
           <div class="font-black text-4xl lg:text-5xl text-primary metric-counter" data-target="30">30+</div>
           <p class="font-bold uppercase text-primary/60 text-sm lg:text-base tracking-widest">Mitra Arsitek</p>
         </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-surface py-20 px-2">
      <div class="grid md:grid-cols-2 px-10 gap-6">
        <!-- About Text -->
         <div data-aos="fade-right" data-aos-duration="800" class="">
          <p class="text-accent font-bold uppercase tracking-widest mb-4">Tentang Kami</p>
          <h2 class="text-3xl md:text-6xl font-bold uppercase">Presisi Teknik, Kualitas Tanpa Kompromi</h2>
          <div class="w-16 h-1 bg-accent my-8"></div>
          <p class="mt-4 text-primary/70 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, reiciendis id. Ut, modi nulla officiis quam magnam sunt eum commodi vitae magni, nobis consequuntur, optio similique nihil nostrum fuga tempore? </p>

          <p class="mt-4 text-primary/70 leading-relaxed" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus excepturi dicta assumenda dignissimos enim rem magni eos repudiandae culpa, natus placeat accusantium laborum reprehenderit atque explicabo dolore ad delectus sit.</p>
         </div>
         <!-- About Image -->
          <div data-aos="fade-left" data-aos-duration="800" class="relative">
            <div class="flex justify-center items-center">
              <img src="./assets/img/about.jpg" alt="">
            </div>
            <div class="bg-accent text-white absolute p-6 bottom-6">
              <p class="font-bold text-4xl">15+</p>
              <p class="uppercase font-bold tracking-widest">Tahun Ekspertise</p>
            </div>
          </div>
      </div>
    </section>

    <!-- Service Section -->
  <section id="services" class="bg-surface py-20 px-2">
     <!-- Header -->
     <div class="">
      <p data-aos="fade-down" data-aos-duration="600" class="text-accent font-bold uppercase text-xl flex justify-center tracking-widest">Layanan Utama</p>
      <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" class="text-3xl md:text-5xl font-black uppercase flex justify-center mt-10">Kompetensi Inti Kami</h2>
     </div>

    <!-- Service Card -->
     <div class="grid md:grid-cols-3 gap-8 mt-16 px-4 mx-2">
    <!-- Card 1 -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="0" class="bg-white p-6">
        <div class="w-20 h-15 text-accent">
          <i class="fa-regular fa-building text-5xl"></i>
        </div>
        <div class="">
          <h3 class="text-2xl font-bold mt-6 uppercase">Facade Instalation & Engineering</h3>
          <p class="text-sm text-primary/70 mt-6">Pemasangan Curtain Wall (dinding tirai kaca), ACP (Aluminium Composite Panel), Spider Fitting System, dan struktur fasad eskterior gedung dengan presisi tinggi sesuai spesifikasi arsitektural.
          </p>  
        </div>
      </div>
      
      <!-- Card 2 -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" class="bg-white p-6">
        <div class="w-20 h-15 text-accent">
          <i class="fa-solid fa-door-open text-5xl"></i>
        </div>
        <div class="">
          <h3 class="text-2xl font-bold mt-6 uppercase">Premium Doors & windows</h3>
          <p class="text-sm text-primary/70 mt-6">Fabrikasi dan instalasi pintu lipat (folding door), pintu geser (sliding door), jendela jungkit (casement window) kelas premium dengan profil aluminium kedap suara dan air. 
          </p>  
        </div>
      </div>

      <!-- Card 3 -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" class="bg-white p-6">
        <div class="w-20 h-15 text-accent">
          <i class="fa-solid fa-trowel-bricks text-5xl"></i>
        </div>
        <div class="">
          <h3 class="text-2xl font-bold mt-6 uppercase">Aluminium finishing & fabrication</h3>
          <p class="text-sm text-primary/70 mt-6">Jasa finishing permukaan aluminium (Powder Coating / Anodizing) yang disesuaikan dengan spesifikasi estetika arsitek, menjamin ketahanan dan konsistensi warna jangka panjang
        </p>  
        </div>
      </div>

     </div>
  </section>

  <!-- Project Section -->
  <section id="projects" class="py-20 md:py-28 bg-white overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-12">
        <p data-aos="fade-down" data-aos-duration="600" class="text-accent text-sm font-bold uppercase tracking-[0.20em] mb-4">Portofolio</p>
        <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" class="text-3xl md:text-5xl font-black leading-tight">Proyek Unggulan</h2>
      </div>
      
      <!-- Badge Projects -->
      <div class="hidden md:flex justify-center gap-4 mb-12 flex-wrap mt-12" id="filter-buttons">
        <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="0" class="filter-btn active bg-primary text-white font-bold uppercase text-xs tracking-[0.10em] px-6 py-3 transition-colors" data-filter="all">Semua</button>
        <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" class="filter-btn bg-surface text-primary font-bold uppercase text-xs tracking-[0.10em] px-6 py-3 hover:bg-primary hover:text-white transition-colors" data-filter="facade">Facade</button>
        <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="200" class="filter-btn bg-surface text-primary font-bold uppercase text-xs tracking-[0.10em] px-6 py-3 hover:bg-primary hover:text-white transition-colors" data-filter="residensial">Residensial</button>
        <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" class="filter-btn bg-surface text-primary font-bold uppercase text-xs tracking-[0.10em] px-6 py-3 hover:bg-primary hover:text-white transition-colors" data-filter="komersial">Komersial</button>
      </div>

      <div id="portfolio-grid" class="hidden md:grid grid-cols-2 lg:grid-cols-3 gap-6">
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="0" class="group relative overflow-x-hidden" data-category="facade komersial">
          <div class="aspect-[4/3] overflow-hidden bg-surface">
            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=600&q=80" alt="Menara Jakarta" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
            <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Komersial</p>
            <h4 class="text-white font-black text-lg mt-1">Menara Jakarta</h4>
            <p class="text-white/70 text-sm mt-1">Jakarta Pusat</p>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" class="group relative overflow-hidden" data-category="residensial facade">
          <div class="aspect-[4/3] overflow-hidden bg-surface">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80" alt="The Grand Residence" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
            <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Residensial</p>
            <h4 class="text-white font-black text-lg mt-1">The Grand Residence</h4>
            <p class="text-white/70 text-sm mt-1">Jakarta Selatan</p>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" class="group relative overflow-hidden" data-category="komersial">
          <div class="aspect-[4/3] overflow-hidden bg-surface">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80" alt="Sentra Bisnis CBD" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
            <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Komersial</p>
            <h4 class="text-white font-black text-lg mt-1">Sentra Bisnis CBD</h4>
            <p class="text-white/70 text-sm mt-1">Tangerang</p>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="0" class="group relative overflow-hidden" data-category="residensial">
          <div class="aspect-[4/3] overflow-hidden bg-surface">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&q=80" alt="Villa Modern" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
            <p class="text-accent text-xs font-bold uppercase tracking-widest">Pintu & Jendela — Residensial</p>
            <h4 class="text-white font-black text-lg mt-1">Villa Modern</h4>
            <p class="text-white/70 text-sm mt-1">Bogor</p>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" class="group relative overflow-hidden" data-category="facade komersial">
          <div class="aspect-[4/3] overflow-hidden bg-surface">
            <img src="https://images.unsplash.com/photo-1479839672679-a46483c0e7c8?w=600&q=80" alt="Hotel Horizon" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
            <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Komersial</p>
            <h4 class="text-white font-black text-lg mt-1">Hotel Horizon</h4>
            <p class="text-white/70 text-sm mt-1">Bandung</p>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" class="group relative overflow-hidden" data-category="residensial facade">
          <div class="aspect-[4/3] overflow-hidden bg-surface">
            <img src="https://images.unsplash.com/photo-1600573472550-8090b5e0745e?w=600&q=80" alt="Cluster Premium" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
            <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Residensial</p>
            <h4 class="text-white font-black text-lg mt-1">Cluster Premium</h4>
            <p class="text-white/70 text-sm mt-1">Surabaya</p>
          </div>
        </div>
      </div>

      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" class="swiper swiper-portfolio md:hidden !overflow-hidden" id="portfolio-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-category="facade komersial">
            <div>
              <div class="aspect-[4/3] overflow-hidden bg-surface">
                <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=600&q=80" alt="Menara Jakarta" class="w-full h-full object-cover" loading="lazy">
              </div>
              <div class="mt-3">
                <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Komersial</p>
                <h4 class="text-primary font-black text-lg">Menara Jakarta</h4>
                <p class="text-primary/60 text-sm">Jakarta Pusat</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-category="residensial facade">
            <div>
              <div class="aspect-[4/3] overflow-hidden bg-surface">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80" alt="The Grand Residence" class="w-full h-full object-cover" loading="lazy">
              </div>
              <div class="mt-3">
                <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Residensial</p>
                <h4 class="text-primary font-black text-lg">The Grand Residence</h4>
                <p class="text-primary/60 text-sm">Jakarta Selatan</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-category="komersial">
            <div>
              <div class="aspect-[4/3] overflow-hidden bg-surface">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80" alt="Sentra Bisnis CBD" class="w-full h-full object-cover" loading="lazy">
              </div>
              <div class="mt-3">
                <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Komersial</p>
                <h4 class="text-primary font-black text-lg">Sentra Bisnis CBD</h4>
                <p class="text-primary/60 text-sm">Tangerang</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-category="residensial">
            <div>
              <div class="aspect-[4/3] overflow-hidden bg-surface">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&q=80" alt="Villa Modern" class="w-full h-full object-cover" loading="lazy">
              </div>
              <div class="mt-3">
                <p class="text-accent text-xs font-bold uppercase tracking-widest">Pintu & Jendela — Residensial</p>
                <h4 class="text-primary font-black text-lg">Villa Modern</h4>
                <p class="text-primary/60 text-sm">Bogor</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-category="facade komersial">
            <div>
              <div class="aspect-[4/3] overflow-hidden bg-surface">
                <img src="https://images.unsplash.com/photo-1479839672679-a46483c0e7c8?w=600&q=80" alt="Hotel Horizon" class="w-full h-full object-cover" loading="lazy">
              </div>
              <div class="mt-3">
                <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Komersial</p>
                <h4 class="text-primary font-black text-lg">Hotel Horizon</h4>
                <p class="text-primary/60 text-sm">Bandung</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-category="residensial facade">
            <div>
              <div class="aspect-[4/3] overflow-hidden bg-surface">
                <img src="https://images.unsplash.com/photo-1600573472550-8090b5e0745e?w=600&q=80" alt="Cluster Premium" class="w-full h-full object-cover" loading="lazy">
              </div>
              <div class="mt-3">
                <p class="text-accent text-xs font-bold uppercase tracking-widest">Facade — Residensial</p>
                <h4 class="text-primary font-black text-lg">Cluster Premium</h4>
                <p class="text-primary/60 text-sm">Surabaya</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination md:hidden"></div>
      </div>
    </div>
  </section>

 <!-- Keunggulan Section -->
  <section id="Keunggulan" class="bg-surface py-20 px-2">
    <!-- Header -->
     <div class="">
      <p data-aos="fade-down" data-aos-duration="600" class="text-accent font-bold uppercase text-xl flex justify-center tracking-widest">Mengapa Alluech</p>
      <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" class="text-3xl md:text-5xl font-black uppercase flex justify-center mt-10">Keunggulan Kami</h2>
     </div>

    <!-- Service Card -->
     <div class="grid md:grid-cols-4 gap-8 mt-16 px-4 mx-2">
    <!-- Card 1 -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="0" class="bg-white p-6">
        <div class="w-20 h-15 text-accent">
         <i class="fa-solid fa-award text-5xl"></i>
        </div>
        <div class="">
          <h3 class="text-xl font-bold mt-6 uppercase">Material Bersertifikasi</h3>
          <p class="text-sm text-primary/70 mt-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia porro, eligendi asperiores nisi expedita rerum obcaecati soluta nam, odio nobis molestiae reiciendis quas reprehenderit quam ipsa magnam in nihil dignissimos!
          </p>  
        </div>
      </div>
      
      <!-- Card 2 -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" class="bg-white p-6">
        <div class="w-20 h-15 text-accent">
          <i class="fa-solid fa-users text-5xl"></i>
        </div>
        <div class="">
          <h3 class="text-xl font-bold mt-6 uppercase">Tim Ahli Berpengalaman</h3>
          <p class="text-sm text-primary/70 mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod inventore aliquam nihil, maiores, perspiciatis saepe quo, rem voluptatum ullam fugiat suscipit eaque labore! Fugiat unde quasi adipisci fugit ex.
          </p>  
        </div>
      </div>

      <!-- Card 3 -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" class="bg-white p-6">
        <div class="w-20 h-15 text-accent">
          <i class="fa-solid fa-clock text-5xl"></i>
        </div>
        <div class="">
          <h3 class="text-xl font-bold mt-6 uppercase">manajemen waktu ketat</h3>
          <p class="text-sm text-primary/70 mt-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic libero at perferendis repellat provident illum obcaecati? Optio suscipit, excepturi placeat accusantium laborum veritatis odio repellendus labore quaerat deleniti ducimus ad.
        </p>  
        </div>
      </div>

      <!-- Card 4 -->
      <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="450" class="bg-white p-6">
        <div class="w-20 h-15 text-accent">
          <i class="fa-solid fa-hand-holding-dollar text-5xl"></i>
        </div>
        <div class="">
          <h3 class="text-2xl font-bold mt-6 uppercase">Efisensi Transparansi</h3>
          <p class="text-sm text-primary/70 mt-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero optio reiciendis, ullam quidem velit eligendi illo, consequatur commodi quas dolorem accusamus rem porro mollitia error, culpa ea debitis incidunt eius?
        </p>  
        </div>
      </div>
     </div>
  </section>

  <!-- Hubungi Kami -->
<section id="contact" class="bg-surface py-20 px-2">
    <div class="grid md:grid-cols-2 px-10 gap-3">
      <!-- Kiri -->
      <div data-aos="fade-right" data-aos-duration="800" class="">
        <p class="text-lg text-accent uppercase font-bold tracking-widest">Hubungi Kami</p>
        <h2 class="text-5xl text-primary font-bold mt-5">Diskusikan Kebutuhan Proyek Anda</h2>
        <p  class="text-sm text-primary/70 my-8">Tim kami siap membantu merealisasikan visi arsitektural Anda. Isi formulir di samping atau hubungi kami langsung langsung melalui kontak di bawah.</p>
        
        <div class="space-y-7">
          <div class="flex gap-5">
            <div class="flex-shrink-0 flex w-10 h-10 text-accent">
              <i class="fa-solid fa-map-location-dot text-4xl"></i>
            </div>
            <div class="">
              <p class="text-lg text-primary font-bold uppercase">Alamat</p>
              <p class="text-sm text-primary/70 max-w-sm">Ruko Megah Raya Blok Q-20, Kec.Rungkut, Surabaya, Jawa Timur 60293</p>
            </div>
          </div>
          <div class="flex gap-5">
            <div class="flex-shrink-0 flex w-10 h-10 text-accent">
              <i class="fa-solid fa-envelope text-4xl"></i>
            </div>
            <div class="">
              <p class="text-lg text-primary font-bold uppercase">Email</p>
              <p class="text-sm text-primary/70">alutech.dinamisabadi@gmail.com</p>
            </div>
          </div>
          <div class="flex gap-5">
            <div class="flex-shrink-0 flex w-10 h-10 text-accent">
              <i class="fa-solid fa-phone text-4xl"></i>
            </div>
            <div class="">
              <p class="text-lg text-primary font-bold uppercase">Telepon/whatsapp</p>
              <p class="text-sm text-primary/70">+62 812-3164-8998</p>
            </div>
          </div>
          <div class="flex gap-5">
            <div class="flex-shrink-0 flex w-10 h-10 text-accent">
              <i class="fa-brands fa-instagram text-4xl"></i>
            </div>
            <div class="">
              <p class="text-lg text-primary font-bold uppercase">Instagram</p>
              <p class="text-sm text-primary/70">@allutech.dinamisabadi</p>
            </div>
          </div>
        </div>
      </div>


      <!-- Kanan Form Permintaan -->
       <div data-aos="fade-left" data-aos-duration="800" class="bg-gray-100 p-10 shadow-sm max-w-xl w-full">
        <h2 class="text-2xl font-black text-primary mb-8 uppercase">Kirim permintaan proyek</h2>

         <!-- Form Action -->

         <!-- NAMA -->

        <div class="space-y-6 mb-4">
          <label class="block text-primary text-sm font-bold uppercase tracking-wider text-slate-700 mb-2">
            Nama Lengkap <span class="text-accent">*</span>
          </label>
        </div>

          <input 
                  type="text"
                  placeholder="Nama Anda"
                  class="w-full border px-5 py-3 border-gray-300 focus:outline-none focus:border-accent focus:ring-2 focus:ring-orange-200 transition">

      <!-- Nama Perusahaan -->
        <div class="space-y-6 mt-4">
          <label class="block text-sm font-bold uppercase tracking-wider text-slate-700 mb-2">
            Nama Perusahaan <span class="text-accent">*</span>
          </label>
        </div>

          <input 
                  type="text"
                  placeholder="Nama Perusahaan"
                  class="w-full border px-5 py-3 border-gray-300 focus:outline-none focus:border-accent focus:ring-2 focus:ring-orange-200 transition">

      <!-- Nomor Whatsapp -->
        <div class="space-y-6 mt-4">
          <label class="block text-sm font-bold uppercase tracking-wider text-slate-700 mb-2">
            Nomor whatsapp / Telepon <span class="text-accent">*</span>
          </label>
        </div>

          <input 
                  type="text"
                  placeholder="+62"
                  class="w-full border px-5 py-3 border-gray-300 focus:outline-none focus:border-accent focus:ring-2 focus:ring-orange-200 transition">

      <!-- Detail Kebutuhan Pelanggan -->
        <div class="space-y-6 mt-4">
          <label class="block text-sm font-bold uppercase tracking-wider text-slate-700 mb-2">
            Detail Kebutuhan <span class="text-accent">*</span>
          </label>
        </div>

          <textarea
                  rows="4"
                  placeholder="Jelaskan kebutuhan proyek Anda...."
                  class="w-full border px-5 py-3 border-gray-300 placeholder:text-gray-400 focus:outline-none focus:border-accent focus:ring-2 focus:ring-orange-200 transition"></textarea>

          <button class="w-full text-sm bg-accent text-white font-bold py-2 uppercase hover:bg-opacity-90 transition duration-200 tracking-widest mt-4">Kirim Permintaan</button> 
       </div>   
      </div>
</section>

    <!-- Maps -->
   <section class="w-full h-100 bg-surface">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.395717029672!2d112.76875817357202!3d-7.309363371861615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6f08771521%3A0x7c0c11a784d73bc8!2sALUVE%20Experience%20Showroom!5e0!3m2!1sid!2sid!4v1785651401532!5m2!1sid!2sid"width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi Alutech"></iframe>
   </section>

   @endsection
   