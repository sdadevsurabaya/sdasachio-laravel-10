<nav class="navbar navbar-expand-lg py-3 position-absolute top-0 start-0 end-0 z-3">
   <div class="container">
      <h1 class="m-0">
         <a href="index.php" class="navbar-brand d-grid text-decoration-none">
            <img src="/assets/img/logo/logo-a.svg" width="70%" height="auto" alt="SDA">
         </a>
      </h1>
      <button class="navbar-toggler border-0" data-bs-toggle="modal" data-bs-target="#navcol" style="color:#fff;">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="#">
         <ul class="navbar-nav text-white text-capitalize ms-auto bg-blue">
            <li class="nav-item dropdown">
               <!-- <a data-bs-toggle="dropdown" href="#dropdown-about" class="nav-link d-lg-none" id="nav-about">about SDA</a> -->
               <a href="about.php" class="nav-link p-3" id="nav-about">about SDA</a>
               <ul class="dropdown-menu rounded-0 border-0 py-0 lh-lg" id="dropdown-about" style="background-color: #8a2432;">
                  <li><a href="about.php" class="dropdown-item" id="nav-about-menu">About SDA</a></li>
                  <li><a href="workshop.php" class="dropdown-item" id="nav-workshop">Workshop Center</a></li>
                  <li><a href="distribution.php" class="dropdown-item" id="nav-distribution">Distribution Network</a></li>
                  <li><a href="news.php" class="dropdown-item" id="nav-about-news">Our News</a></li>
                  <li><a href="media-center.php" class="dropdown-item" id="nav-about-media-centre">Media Center</a></li>
               </ul>
            </li>

            <li class="nav-item position-relative">
               <a class="nav-link p-3" href="#" id="nav-products">Products</a>
               <div class="tab-content shadow py-0" id="tab_content_main" onmouseleave="hideTab()">
                  <div class="row flex-nowrap gx-4">

                     <!-- Nav Tabs -->
                     <div class="col p-0" id="add-border-end">
                        <ul class="nav border-0 d-block nav-tabs" id="productTabs" style="line-height: 2.5;">
                           <li>
                              <a class="dropdown-item border-0 px-3" id="products-1" href="#" onclick="showTab('product1')">Fluid Conveyings</a>
                           </li>
                           <li>
                              <a class="dropdown-item border-0 px-3" id="products-2" href="#" onclick="showTab('product2')">Hydraulic Power & Control</a>
                           </li>
                           <li>
                              <a class="dropdown-item border-0 px-3" id="products-3" href="#" onclick="showTab('product3')">Pneumatic Power & Control</a>
                           </li>
                           <li>
                              <a class="dropdown-item border-0 px-3" id="products-4" href="#" onclick="showTab('product4')">Engineering</a>
                           </li>
                           <li>
                              <a class="dropdown-item border-0 px-3" id="products-5" href="#" onclick="showTab('product5')">Industrial</a>
                           </li>
                           <li>
                              <a class="dropdown-item border-0 px-3" id="products-6" href="#" onclick="showTab('product6')">Material Handling Equipment</a>
                           </li>
                           <li>
                              <a class="dropdown-item border-0 px-3" id="products-7" href="#" onclick="showTab('product7')">Metal</a>
                        </ul>
                     </div>

                     <div class="col p-0" id="sub-product-brand">
                        <!-- Konten Tab -->
                        <div class="tab-pane fade" id="product1">
                           <div class="nav lh-lg flex-column position-relative">
                              <a href="products_1_1.php" id="products-1-1" class="nav-link px-3">Sachio</a>
                              <a href="products_1_2.php" id="products-1-2" class="nav-link px-3">Dunlop Hiflex</a>
                              <a href="products_1_3.php" id="products-1-3" class="nav-link px-3">Alfagomma</a>
                              <a href="products_1_4.php" id="products-1-4" class="nav-link px-3">Metaquip</a>
                              <a href="products_1_5.php" id="products-1-5" class="nav-link px-3">Transfer Oil</a>
                              <a href="products_1_6.php" id="products-1-6" class="nav-link px-3">Stucchi</a>
                              <a href="products_1_7.php" id="products-1-7" class="nav-link px-3">Pi.Effe.Ci</a>
                              <a href="products_1_8.php" id="products-1-8" class="nav-link px-3">O+P</a>
                              <a href="products_1_9.php" id="products-1-9" class="nav-link px-3">Toyox</a>
                              <a href="products_1_10.php" id="products-1-10" class="nav-link px-3">Dixon</a>
                              <a href="products_1_11.php" id="products-1-11" class="nav-link px-3">Hakko</a>
                              <a href="products_1_12.php" id="products-1-12" class="nav-link px-3">Vacuflex</a>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="product2">
                           <div class="nav lh-lg flex-column">
                              <a href="products_2_1.php" id="products-2-1" class="nav-link px-3">Sachio</a>
                              <a href="products_2_2.php" id="products-2-2" class="nav-link px-3">Yuken</a>
                              <a href="products_2_3.php" id="products-2-3" class="nav-link px-3">Honor</a>
                              <a href="products_2_4.php" id="products-2-4" class="nav-link px-3 d-none">Belium</a>

                              <a href="products_2_5.php" id="products-2-5" class="nav-link px-3">Hengst</a>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="product3">
                           <div class="nav lh-lg flex-column">
                              <a href="products_3_1.php" id="products-3-1" class="nav-link px-3">Sachio</a>
                              <a href="products_3_2.php" id="products-3-2" class="nav-link px-3 d-none">XCPC</a>
                              <!--<a href="products_3_3.php" id="products-3-3" class="nav-link px-3">JXPC</a>-->
                              <!--<a href="products_3_4.php" id="products-3-4" class="nav-link px-3">Festo</a>-->
                           </div>
                        </div>

                        <div class="tab-pane fade" id="product4">
                           <div class="nav lh-lg flex-column">
                              <a href="products_4_1.php" id="products-4-1" class="nav-link px-3">SDA</a>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="product5">
                           <div class="nav lh-lg flex-column">
                              <!--<a href="products_5_1.php" id="products-5-1" class="nav-link px-3">NEO</a>-->
                              <a href="products_5_1.php" id="products-5-1" class="nav-link px-3">Sachio Industrial Valve</a>
                              <a href="products_5_2.php" id="products-5-2" class="nav-link px-3">Sachio Pressure Gauges</a>
                              <a href="products_5_3.php" id="products-5-3" class="nav-link px-3">Mitsuboshi</a>
                              <a href="products_5_4.php" id="products-5-4" class="nav-link px-3">Milwaukee</a>
                              <a href="products_5_5.php" id="products-5-5" class="nav-link px-3">Nitto Kohki</a>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="product6">
                           <div class="nav lh-lg flex-column">
                              <a href="products_6_1.php" id="products-6-1" class="nav-link px-3">Hangcha</a>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="product7">
                           <div class="nav lh-lg flex-column">
                              <a href="products_7_1.php" id="products-7-1" class="nav-link px-3">SDA</a>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <a href="industries.php" class="nav-link p-3" id="nav-industries">industries</a>
            </li>

            <li class="nav-item">
               <a href="contact.php" class="nav-link p-3" id="nav-contact">contact us</a>
            </li>

            <li class="nav-item" style="align-self: center;">
               <a href="https://tokosda.com/" target="_blank" class="nav-link p-3" id="nav-wtb">
                  <i class="fa-solid fa-magnifying-glass"></i>
               </a>
            </li>

            <li class="nav-item d-none">
               <a href="#" class="nav-link" id="nav-career">career</a>
            </li>

            <li class="nav-item">
               <a href="#" class="nav-link d-none" id="nav-search">search</a>
            </li>
         </ul>
      </div>
   </div><!-- end container -->
</nav><!-- end navbar -->



<!-- Modal sidebar nav mobile -->
<div class="modal fade" id="navcol" tabindex="-1" aria-labelledby="navcolLabel" aria-hidden="true"
   style="height: 100%;">
   <div class="modal-dialog modal-dialog-centered justify-content-end m-0" style="max-width: unset; height: 100%;">
      <div class="modal-content border-0 rounded-0" style="max-width: 300px; height: 100%; overflow-y:scroll;">
         <div class="modal-header justify-content-end rounded-0 border-0" style="padding: 15px;">
            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
               <i class="fa-solid fa-2x opacity-50 fa-xmark"></i>
            </button>
         </div>
         <div class="modal-body text-left" id="navcol">
            <ul class="navbar-nav fw-light">
               <li class="nav-item">
                  <a class="nav-link" href="#mobileAboutSDA" data-bs-toggle="collapse" data-bs-parent="#navcol">
                     About SDA</a>
                  <div class="collapse" id="mobileAboutSDA">
                     <ul class="navbar-nav ps-4 mb-3">
                        <li class="nav-item"> <a href="about.php" class="nav-link" id="nav-about-mobile">About SDA</a></li>
                        <li class="nav-item"> <a href="workshop.php" class="nav-link">Workshop Center</a></li>
                        <li class="nav-item"> <a href="distribution.php" class="nav-link">Distribution Network</a></li>
                        <li class="nav-item"> <a href="news.php" class="nav-link">Our News</a></li>
                        <li class="nav-item"> <a href="media-center.php" class="nav-link">Media Centre</a></li>
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="nav-brands-m" href="#mobileProduct" data-bs-toggle="collapse">Products</a>
                  <div class="collapse" id="mobileProduct">
                     <ul class="navbar-nav ps-4 mb-3">
                        <li class="nav-item">
                           <a class="nav-link" href="#mobilefluidConveying" data-bs-toggle="collapse" data-bs-parent="#navcol">
                              Fluid Conveyings</a>
                           <div class="collapse" id="mobilefluidConveying">
                              <ul class="navbar-nav ps-4 mb-3">
                                 <li class="nav-item"> <a href="products_1_1.php" id="products-1-1" class="nav-link">Sachio</a></li>
                                 <li class="nav-item"> <a href="products_1_2.php" id="products-1-2" class="nav-link">Dunlop Hiflex</a></li>
                                 <li class="nav-item"> <a href="products_1_3.php" id="products-1-3" class="nav-link">Alfagomma</a></li>
                                 <li class="nav-item"> <a href="products_1_4.php" id="products-1-4" class="nav-link">Metaquip</a></li>
                                 <li class="nav-item"> <a href="products_1_5.php" id="products-1-5" class="nav-link">Transfer Oil</a></li>
                                 <li class="nav-item"> <a href="products_1_6.php" id="products-1-6" class="nav-link">Stucchi</a></li>
                                 <li class="nav-item"> <a href="products_1_7.php" id="products-1-7" class="nav-link">Pi.Effe.Ci</a></li>
                                 <li class="nav-item"> <a href="products_1_8.php" id="products-1-8" class="nav-link">O+P</a></li>
                                 <li class="nav-item"> <a href="products_1_9.php" id="products-1-9" class="nav-link">Toyox</a></li>
                                 <li class="nav-item"> <a href="products_1_10.php" id="products-1-10" class="nav-link">Dixon</a></li>
                                 <li class="nav-item"> <a href="products_1_11.php" id="products-1-11" class="nav-link">Hakko</a></li>
                                 <li class="nav-item"> <a href="products_1_12.php" id="products-1-12" class="nav-link">Vacuflex</a></li>

                              </ul>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href="#mobileHPC" class="nav-link" data-bs-toggle="collapse" data-bs-parent="#navcol">
                              Hydraulic Power & Control</a>
                           <div class="collapse" id="mobileHPC">
                              <ul class="navbar-nav ps-4 mb-3">
                                 <li class="nav-item"> <a href="products_2_1.php" id="products-2-1" class="nav-link">Sachio</a></li>
                                 <li class="nav-item"> <a href="products_2_2.php" id="products-2-2" class="nav-link">Yuken</a></li>
                                 <li class="nav-item"> <a href="products_2_3.php" id="products-2-3" class="nav-link">Honor</a></li>
                                 <li class="nav-item"> <a href="products_2_4.php" id="products-2-4" class="nav-link d-none">Belium</a></li>

                                 <li class="nav-item"> <a href="products_2_5.php" id="products-2-5" class="nav-link">Hengst</a></li>
                              </ul>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href="#mobilePPC" class="nav-link" data-bs-toggle="collapse" data-bs-parent="#navcol">
                              Pneumatic Power & Control</a>
                           <div class="collapse" id="mobilePPC">
                              <ul class="navbar-nav ps-4 mb-3">
                                 <li class="nav-item"> <a href="products_3_1.php" id="products-3-1" class="nav-link">Sachio</a></li>
                                 <li class="nav-item"> <a href="products_3_2.php" id="products-3-2" class="nav-link d-none">XCPC</a></li>
                                 <!--<li class="nav-item"> <a href="products_3_3.php" id="products-3-3" class="nav-link">JXPC</a></li>-->
                                 <!--<li class="nav-item"> <a href="products_3_4.php" id="products-3-4" class="nav-link">Festo</a></li>-->
                              </ul>
                           </div>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#mobileEngineering" class="nav-link" data-bs-toggle="collapse" data-bs-parent="#navcol">
                              Engineering</a>
                           <div class="collapse" id="mobileEngineering">
                              <ul class="navbar-nav ps-4 mb-3">
                                 <li class="nav-item"> <a href="products_4_1.php" id="products-4-1" class="nav-link">SDA</a></li>

                              </ul>
                           </div>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#mobileIndustrial" class="nav-link" data-bs-toggle="collapse" data-bs-parent="#navcol">
                              Industrial</a>
                           <div class="collapse" id="mobileIndustrial">
                              <ul class="navbar-nav ps-4 mb-3">
                                 <!--<li class="nav-item"> <a href="products_5_1.php" id="products-5-1" class="nav-link">NEO</a></li>-->
                                 <li class="nav-item"> <a href="products_5_1.php" id="products-5-1" class="nav-link">Sachio Industrial Valve</a></li>
                                 <!--<li class="nav-item"> <a href="products_5_2.php" id="products-5-2" class="nav-link">Zenica</a></li>-->
                                 <li class="nav-item"> <a href="products_5_2.php" id="products-5-2" class="nav-link">Sachio Pressure Gauges</a></li>
                                 <li class="nav-item"> <a href="products_5_3.php" id="products-5-3" class="nav-link">Mitsuboshi</a></li>
                                 <li class="nav-item"> <a href="products_5_4.php" id="products-5-4" class="nav-link">Milwaukee</a></li>
                                 <li class="nav-item"> <a href="products_5_5.php" id="products-5-5" class="nav-link">Nitto Kohki</a></li>
                              </ul>
                           </div>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#mobileMHE" class="nav-link" data-bs-toggle="collapse" data-bs-parent="#navcol">
                              Material Handling Equipment</a>
                           <div class="collapse" id="mobileMHE">
                              <ul class="navbar-nav ps-4 mb-3">
                                 <li class="nav-item"> <a href="products_6_1.php" id="products-6-1" class="nav-link">Hangcha</a></li>
                              </ul>
                           </div>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#mobileMetal" class="nav-link" data-bs-toggle="collapse" data-bs-parent="#navcol">
                              Metal</a>
                           <div class="collapse" id="mobileMetal">
                              <ul class="navbar-nav ps-4 mb-3">
                                 <li class="nav-item"> <a href="products_7_1.php" id="products-7-1" class="nav-link">SDA</a></li>
                              </ul>
                           </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a href="industries.php" class="nav-link" id="nav-industries-mobile">Industries</a>
               </li>
               <li class="nav-item">
                  <a href="contact.php" class="nav-link" id="nav-contact-mobile">Contact Us</a>
               </li>
               <li class="nav-item ">
                  <a href="https://tokosda.com/" target="_blank" class="nav-link">
                     <img src="/assets/img/toko-logo.png" style="width: 40%; vertical-align: top;">
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>


<script type="text/javascript">
   window.onload = (event) => {
      document.getElementById('sub-product-brand').style.display = 'none';
   };
   // sticky navbar
   $(window).on('scroll', function() {
      if ($(window).scrollTop()) {
         $('.navbar').addClass('scroll');
      } else {
         $('.navbar').removeClass('scroll');
      }
   })

   function showTab(tabId) {
      const tabContent = document.getElementById('tab_content_main');
      const borderEnd = document.getElementById('add-border-end');
      const tabSubProduct = document.getElementById('sub-product-brand');
      const selectedTab = document.getElementById(tabId);

      // Tampilkan tab-content
      tabSubProduct.style.display = 'block';
      tabContent.classList.add('active'); // Tambahkan kelas active untuk width 600px
      borderEnd.classList.add('border-end', 'border-2', 'border-light-2');

      // Sembunyikan semua tab-pane
      document.querySelectorAll('.tab-pane').forEach(tab => {
         tab.classList.remove('show', 'active');
      });

      // Tampilkan tab yang dipilih
      if (selectedTab) {
         selectedTab.classList.add('show', 'active');
      }
   }

   // Fungsi untuk menyembunyikan tab saat mouse keluar
   function hideTab() {
      const tabContent = document.getElementById('tab_content_main');
      const borderEnd = document.getElementById('add-border-end');
      const tabSubProduct = document.getElementById('sub-product-brand');

      // Sembunyikan tab-content
      tabSubProduct.style.display = 'none';
      tabContent.classList.remove('active'); // Hapus kelas active untuk kembali ke 300px
      borderEnd.classList.remove('border-end', 'border-2', 'border-light-2');

      // Sembunyikan semua tab-pane
      document.querySelectorAll('.tab-pane').forEach(tab => {
         tab.classList.remove('show', 'active');
      });
   }


   document.addEventListener("DOMContentLoaded", function() {
      // Ambil semua link dalam navbar
      let navLinks = document.querySelectorAll(".navbar-nav .dropdown-item");

      navLinks.forEach(function(link) {
         link.addEventListener("click", function() {
            // Hapus class active dari semua link
            navLinks.forEach(nav => nav.classList.remove("active"));

            // Tambahkan class active ke link yang diklik
            this.classList.add("active");
         });
      });
   });
</script>
