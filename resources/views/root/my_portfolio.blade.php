<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>David John | Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <h1><a href="{{ route('welcome') }}">
                    @foreach ($about as $abouts)
                        {{ $abouts->firstname }} {{ $abouts->lastname }}
                </a></h1>
            @endforeach
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <h2>I'm a passionate <span>Web Developer</span> from Southern Leyte</h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#resume">Resume</a></li>
                    {{-- <li><a class="nav-link" href="#services">Services</a></li> --}}
                    {{-- <li><a class="nav-link" href="#portfolio">Portfolio</a></li> --}}
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                    {{-- <li><a class="nav-link" href="login">Login</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <a href="https://twitter.com/Davidjohn050212" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://web.facebook.com/davidjohn.cervantes.5" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/cervantesolbes/" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@davidjohncervan47" class="linkedin"><i class="bi bi-tiktok"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-github"></i></a>

            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>
            @foreach ($about as $abouts)
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/Cervantes.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Frontend Developer &amp; Backend Developer</h3>
                        <p class="fst-italic">
                            Passionate about crafting seamless digital experiences through innovative frontend and
                            backend development.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Birthday:</strong>
                                        <span>{{ $abouts->birthday }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Website:</strong>
                                        <span>{{ $abouts->website }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Phone:</strong>
                                        <span>{{ $abouts->phone }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>City:</strong>
                                        <span>{{ $abouts->address }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Age:</strong>
                                        <span>{{ $abouts->age }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Degree:</strong>
                                        <span>{{ $abouts->degree }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Email:</strong>
                                        <span>{{ $abouts->email }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Freelance:</strong>
                                        <span>{{ $abouts->freelance }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            I am dedicated to solving complex problems and thrive in collaborative environments. With a
                            degree in {{ $abouts->degree }},
                            I bring a solid foundation in computer science to every project. Let's build something
                            amazing together!
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- End About Me -->

        <!-- ======= Counts ======= -->

        <!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">60%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="progress">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CodeIgniter Frameworks<i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">laravel Frameworks<i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- End Skills -->

        <!-- ======= Experience ======= -->
            <div class="interests container">

                <div class="section-title">
                    <h2>Experiences</h2>
                </div>


            </div>

            <div class="counts container">
                <div class="row">
                    @foreach ($job as $job )
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <img src="{{ asset('storage/uploads/company/' . $job->company_img) }}">
                            <h6 class="mt-4">{{ $job->company }}</h6>
                            <small>{{ $job->job }}</small>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        <!-- End Interests -->

    </section>
    <!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Resume</h2>
                    </div>
                    <div class="col-lg-6 text-end">
                      <button type="button" class="btn btn-success">Download CV</button>
                    </div>
                </div>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Summary</h3>
                    <div class="resume-item pb-0">
                        @foreach ($about as $aboutItem)
                            <h4>{{ $aboutItem->firstname }}{{ $aboutItem->lastname }}</h4>
                        @endforeach
                        <p>
                            <em>
                                Innovative and results-driven Web Developer with 3+ years of hands-on experience in
                                conceptualizing, designing, and implementing dynamic, user-centric websites and web
                                applications from inception to the final, polished product.
                            </em>
                        <p>
                        <ul>
                            {{-- @foreach ($about as $aboutItem)
                                <li>{{ $aboutItem->address }}</li>
                            @endforeach
                            @foreach ($contact as $contactItem)
                                <li>{{ $contactItem->contact_type }}</li>
                                <li>{{ $contactItem->contact_info }}</li>
                            @endforeach --}}
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        {{-- @foreach ($education as $edu)
                            <h4>{{ $edu->college }}</h4>
                            <h5>{{ $edu->college_grad }}</h5>
                            <p><em>{{ $edu->college_address }}</em></p>
                        @endforeach --}}

                        <p>
                            As a web developer, I specialize in creating seamless and responsive online experiences. My
                            expertise lies in crafting well-architected, visually appealing websites that prioritize
                            user experience and functionality. From front-end design to back-end development, I am
                            dedicated to delivering high-quality, performant web solutions.
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Bachelor of Science in Information Technology</h4>
                        <h5>2023 - 2024</h5>
                        <p><em>Southern Leyte State University, Tomas Oppus, SL</em></p>
                        <p>
                            In my academic journey at Southern Leyte State University, I honed my skills in Information
                            Technology, providing me with a solid foundation in coding, software development, and system
                            architecture. My commitment to staying abreast of the latest web technologies ensures that
                            my work aligns with industry best practices.

                            With a diverse portfolio that showcases a range of web projects, I am well-equipped to
                            tackle the unique challenges of web development. Let's collaborate to bring your digital
                            ideas to life, combining creativity and technical proficiency for a standout online
                            presence.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    {{-- @if ($experience)

                        @foreach ($experience as $experiences)
                            <div class="resume-item">

                                <h4>{{ $experiences->job }}</h4>
                                <h5>{{ $experiences->year }} - {{ $experiences->company_address }}</h5>
                                <p><em>{{ $experiences->position }} </em></p>
                                <p>
                                <ul>
                                    <li>
                                        Lead the Frontend of Booking System
                                    </li>

                                </ul>
                                </p>
                            </div>
                        @endforeach
                    @else
                        <p> No Experiece yet</p>
                    @endif --}}
                </div>
            </div>

        </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>My Services</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Works</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>Asuncion, Malitbog Southern Leyte, PH </p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>davidjohn09cervantes@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>+63 948 398 0082</p>
                    </div>
                </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

        </div>
    </section><!-- End Contact Section -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
