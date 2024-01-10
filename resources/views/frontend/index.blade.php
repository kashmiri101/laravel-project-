
@extends("frontend.layouts.main")


@section("main-container");
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Evins sloution, We provide all kind of  designs services</h1>
          <h2>Let us Learn about Your Business Better So We Can Design the Best Hand-Crafted Logo Design for You.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#" class="btn-get-started scrollto">Discover more </a>
           
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{url('frontend/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{url('frontend/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{url('frontend/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{url('frontend/assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{url('frontend/assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{url('frontend/assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{url('frontend/assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

       

        <div class="row content  align-items-center justify-content-between">
            <div class="col-lg-6">
              <div class="section-title">
                <h2>About Us</h2>
              </div>
            <p>
             We are an uncompromising company that provides the best design services like custom logo design, web design, video animation, and comprehensive digital marketing like SEO, SEM, SMM.
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#" class="btn-get-started scrollto">Discover more services <i class="bi bi-chevron-right"></i></a>           
            </div>
            
          </div>
           <div class="col-lg-5 align-items-stretch order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{url('frontend/assets/img/about-us.png')}}" class="img-fluid text-center">
           </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

       <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

         <div class="section-title servic">
            <h2>Services</h2>
            <p>At Evins Sloution, we work as a full-fledged software house that provides every service which can help your business grow.</p>
          </div>

        <div class="row n-gutters justify-content-between">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{url('frontend/assets/img/s-logo.png')}}" class="img-fluid"></div>
              <h4><a href="">LOGO DESIGN & BRANDING</a></h4>
              
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{url('frontend/assets/img/s-web.png')}}" class="img-fluid"></div>
              <h4><a href="">WEB DESIGN</a></h4>
              
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{url('frontend/assets/img/s-digital.png')}}" class="img-fluid"></div>
              <h4><a href="">DIGITAL MARKETING</a></h4>
              
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="{{url('frontend/assets/img/s-video.png')}}" class="img-fluid"></div>
              <h4><a href="">VIDEO ANIMATION</a></h4>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- =======Logo Design & Branding< ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

       

        <div class="row content align-items-center justify-content-between">
            <div class="col-lg-6">
              <div class="section-title">
                <h2>Logo Design & Branding</h2>
              </div>
            <p>
             We are an uncompromising company that provides the best design services like custom logo design, web design, video animation, and comprehensive digital marketing like SEO, SEM, SMM.
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#" class="btn see-pric scrollto">See Pricing <i class="bi bi-chevron-right"></i></a>  
                <a href="#" class="btn-get-started scrollto">Discuss Now <i class="bi bi-chevron-right"></i></a>           
            </div>
            
          </div>
           <div class="col-lg-5 align-items-stretch order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{url('frontend/assets/img/logo-design.png')}}" class="img-fluid text-center">
           </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-ldesing">Logo Design</li>
          <li data-filter=".filter-wdesing">Web Design</li>
          <li data-filter=".filter-webdev">Web Development</li>
          <li data-filter=".filter-Dmark">Digital Marketing</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-3 col-md-6 portfolio-item filter-ldesing">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
             
              <a href="{{url('frontend/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-webdev">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              
              <a href="{{url('frontend/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-ldesing">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              
              <a href="{{url('frontend/assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
             
              <a href="{{url('frontend/assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-wdesing">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">             
              <a href="{{url('frontend/assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-Dmark">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              
              <a href="{{url('frontend/assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
             
              <a href="{{url('frontend/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>
 
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              
              <a href="{{url('frontend/assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
             
              <a href="{{url('frontend/assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

           <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{url('frontend/assets/img/portfolio/portfolio-13.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              
              <a href="{{url('frontend/assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Price Section ======= -->
    <section id="price" class="price pricing">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Our Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>        
      </div>

        <div class="tabs">
          <button class="tablink" onclick="openTab('Tab1')" id="Tab1Button">Logo Design</button>
          <button class="tablink" onclick="openTab('Tab2')" id="Tab2Button">Branding</button>
          <button class="tablink" onclick="openTab('Tab3')" id="Tab3Button">Web Design</button>
          <button class="tablink" onclick="openTab('Tab4')" id="Tab4Button">Video Animation</button>

          <div id="Tab1" class="tabcontent">
            <!-- Logo Package -->
            <div class="container">
            <div class="row">            
              <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Basic Package</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>0<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                  <h3>Business Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>29<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>
              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Dulex Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

            </div>           
            </div>

            <!-- End Logo Package -->
          </div>

          <div id="Tab2" class="tabcontent">
           
           <!-- Logo Package -->
            <div class="container">
            <div class="row">            
              <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Basic Package</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>0<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                  <h3>Business Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>29<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>
              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Dulex Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

            </div>           
            </div>

            <!-- End Logo Package -->
          </div>

          <div id="Tab3" class="tabcontent">
           
           <!-- Logo Package -->
            <div class="container">
            <div class="row">            
              <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Basic Package</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>0<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                  <h3>Business Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>29<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>
              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Dulex Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

            </div>           
            </div>

            <!-- End Logo Package -->
          </div>

          <div id="Tab4" class="tabcontent">
           
           <!-- Logo Package -->
            <div class="container">
            <div class="row">            
              <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Basic Package</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>0<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                  <h3>Business Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>29<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>
              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Dulex Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

            </div>           
            </div>

            <!-- End Logo Package -->
          </div>

          <div id="Tab5" class="tabcontent">
           
            <!-- Logo Package -->
            <div class="container">
            <div class="row">            
              <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Basic Package</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>0<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                  <h3>Business Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>29<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Professional Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>
              <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <p>Dulex Package Services</p>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

            </div>           
            </div>

            <!-- End Logo Package --> 
          </div>
        </div>

    </section><!-- End Price Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row align-items-center">
          <div class="col-lg-8 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             <a class="cta-btn align-middle" href="#">Chat With Us</a>
             <a class="cta-btn align-middle" href="#">Contact Us</a>
          </div>
          <div class="col-lg-4 cta-img text-center">
            <img src="{{url('frontend/assets/img/cta-img.png')}}" class="img-fluid text-center">
          </div>
        </div>



      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="team  why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <h2>Why Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start justify-content-center">              
              <div class="member-info">
               <div class="d-flex justify-content-start align-items-center mb-2">                
                  <img src="{{url('frontend/assets/img/why-us/exclusive.png')}}" class="img-fluid" alt="">
                  <h4>Exclusive Design Assurity</h4>
                </div>
                <span>All the designs and concepts are made from scratch by our talented designers, assuring you exclusive work.</span>                     
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start justify-content-center">              
              <div class="member-info">
              <div class="d-flex justify-content-start align-items-center mb-2">
                <img src="{{url('frontend/assets/img/why-us/industry.png')}}" class="img-fluid" alt="">
                <h4>Industry-Based Niche Designers</h4>
              </div>
                <span>We have an entire team that has plenty of experience in several industries. So whichever industry your business belongs to, we possess in-depth knowledge.</span>                     
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start justify-content-center">              
              <div class="member-info">
                <div class="d-flex justify-content-start align-items-center mb-2">
                  <img src="{{url('frontend/assets/img/why-us/unlimited.png')}}" class="img-fluid" alt="">
                  <h4>Unlimited Revisions</h4>
                </div>
                <span>You can have as many revisions as you want until you are completely satisfied with our work.</span>                     
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3" >
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start justify-content-center">              
              <div class="member-info">
                <div class="d-flex justify-content-start align-items-center mb-2"> 
                  <img src="{{url('frontend/assets/img/why-us/refund.png')}}" class="img-fluid" alt="">
                  <h4>100% Refund Policy</h4>
                </div>
                <span>There is nothing we want more than your happiness, and if you do not like our services (that’s highly impossible, though), we will refund 100% of your money back.</span>                     
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start justify-content-center">              
              <div class="member-info">
                <div class="d-flex justify-content-start align-items-center mb-2">
                  <img src="{{url('frontend/assets/img/why-us/one-stop.png')}}" class="img-fluid" alt="">
                  <h4>One Stop Shop</h4>
                </div>
                <span>We provide every digital and design service that takes your business to the next level, from custom logo design to website development and video animation.</span>                     
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start justify-content-center">              
              <div class="member-info">
                <div class="d-flex justify-content-start align-items-center mb-2">
                <img src="{{url('frontend/assets/img/why-us/easy-instal.png')}}" class="img-fluid" alt="">
                <h4>Easy Installment Plans</h4>
                </div>
                <span>We love startups and enthusiastic entrepreneurs. If you are one, you can avail yourself of our easy installment plans for projects worth more than $999.</span>                     
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta cta2 ">
      <div class="container" data-aos="zoom-in">
        <div class="row align-items-center">
          <div class="col-lg-4 cta-img2 text-center">
            <img src="{{url('frontend/assets/img/cta-elem.png')}}" class="img-fluid text-center">
          </div>
          <div class="col-lg-8 text-center text-lg-start">
              <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{url('frontend/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{url('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{url('frontend/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{url('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{url('frontend/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
          </div>
        </div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
              <h2>Let's Talk</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        <div class="row">
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch"  data-aos="zoom-in">            
            
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
           <div class="col-lg-6 d-flex align-items-stretch"  data-aos="zoom-in">
           <img src="{{url('frontend/assets/img/let-talk.png')}}" class="img-fluid text-center">
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection