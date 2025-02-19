<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
            K.Ramakrishnan College of Engineering, Trichy :: KRCE
    </title>

      
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{asset('assets/img/fav_icon.png')}}"
        />
        <link rel="manifest" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta
            name="msapplication-TileImage"
            content="{{asset('assets/img/fav_icon.png')}}"
        />

        <meta name="theme-color" content="#ffffff" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        
        <link
            href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  
         <style>
        .kr_logo,.naac_logo{
            width: 80px;
            height: 80px;
        }
        .clg_logo{
            width: 300px;
            height: 105px !important;
        }
       .clg_code{
            width: 80px;
            height: 100px !important;
       }
        .sub_heading{
            font-size: 16px;
            font-weight: 500;
            color: var(--theme-color);
            font-family: var(--title-font);
            text-transform: uppercase;
            margin-top: 5px;
            margin-bottom: 2px;
            display: block;

        }
        .text-intent2px{
            text-indent: 2em;
        }

        /* placement logo profile */
        .image-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        .image-container img {
            width: 50px; /* Adjust size */
            height: 50px;
            border-radius: 50%;
            border: 3px solid white;
            object-fit: cover;
            position: absolute;
            transition: transform 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.1);
        }

        .image-container img:nth-child(1) { left: 0px; }
        .image-container img:nth-child(2) { left: 30px; }
        .image-container img:nth-child(3) { left: 60px; }
        .image-container img:nth-child(4) { left: 90px; }
        .image-container img:nth-child(5) { left: 120px; }

        .more-count {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: blue;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            position: absolute;
            left: 180px;
            border: 3px solid white;
        }
        /* end */

        .testi-area-1{
            padding-top: 55px;
        }
    </style>
   </style>
</head>
<body>

        <div class="preloader">
            <button class="th-btn style3 preloaderCls">Cancel Preloader</button>
            <div class="preloader-inner"><span class="loader"></span></div>
        </div>

        <div class="popup-search-box d-none d-lg-block">
            <button class="searchClose"><i class="fal fa-times"></i></button>
            <form action="#">
                <input type="text" placeholder="What are you looking for?" />
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="th-menu-wrapper">
            <div class="th-menu-area text-center">
                <button class="th-menu-toggle">
                    <i class="fal fa-times"></i>
                </button>
                <div class="mobile-logo">
                    <a href="index.html"
                        ><img src="{{asset('assets/img/logo.jpg')}}" alt="NexDigi"
                    /></a>
                </div>
                <div class="th-mobile-menu">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Multipage</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html"
                                                >Home University</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-2.html"
                                                >Home Online Education</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-3.html"
                                                >Home University Admission</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-4.html"
                                                >Home Digital Education</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-5.html"
                                                >Home Academy
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-6.html"
                                                >Home Online Training
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-7.html"
                                                >Home Online Mentors
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-8.html"
                                                >Home Online Courses
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-9.html"
                                                >Home Kindergarten
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-10.html"
                                                >Home University
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-11.html"
                                                >Online Education
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-12.html"
                                                >Online Instructor
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-13.html"
                                                >Skill Development
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-14.html"
                                                >Home Trainer
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home-15.html"
                                                >Home Admission
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Onepage</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="home1-onepage.html"
                                                >University Onepage</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home2-onepage.html"
                                                >Online Education Onepage</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home3-onepage.html"
                                                >University Admission Onepage</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home4-onepage.html"
                                                >Digital Education Onepage</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home5-onepage.html"
                                                >Academy Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home6-onepage.html"
                                                >Online Training Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home7-onepage.html"
                                                >Online Mentors Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home8-onepage.html"
                                                >Online Courses Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home9-onepage.html"
                                                >Kindergarten Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home10-onepage.html"
                                                >University Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home11-onepage.html"
                                                >Online Education Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home12-onepage.html"
                                                >Online Instructor Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home13-onepage.html"
                                                >Skill Development Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home14-onepage.html"
                                                >Trainer Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                        <li>
                                            <a href="home15-onepage.html"
                                                >Admission Onepage
                                                <span class="new-label"
                                                    >New</span
                                                ></a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">RTL</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="home1-rtl.html"
                                                >University RTL</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home2-rtl.html"
                                                >Online Education RTL</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home3-rtl.html"
                                                >University Admission RTL</a
                                            >
                                        </li>
                                        <li>
                                            <a href="home4-rtl.html"
                                                >Digital Education RTL</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Courses</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="course.html"
                                        >Courses With Sidebar</a
                                    >
                                </li>
                                <li>
                                    <a href="course-2.html"
                                        >Courses Without Sidebar</a
                                    >
                                </li>
                                <li>
                                    <a href="course-3.html">Courses Videos</a>
                                </li>
                                <li>
                                    <a href="course-details.html"
                                        >Course Details</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Teachers</a>
                            <ul class="sub-menu">
                                <li><a href="team.html">Instructors</a></li>
                                <li>
                                    <a href="team-details.html"
                                        >Instructors Details</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li>
                                            <a href="shop-details.html"
                                                >Shop Details</a
                                            >
                                        </li>
                                        <li>
                                            <a href="cart.html">Cart Page</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="event.html">Events</a></li>
                                <li>
                                    <a href="event-details.html"
                                        >Event Details</a
                                    >
                                </li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="error.html">Error Page</a></li>
                            </ul>
                        </li>
                        {{-- <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li><a href="#contact-sec">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <header class="th-header header-layout1 onepage-nav">
            <div class="header-top">
                <div class="container">
                    <div
                        class="row justify-content-center justify-content-lg-between align-items-center gy-2"
                    >
                         <div class="col-auto d-none d-lg-block">
                            <div class="header-links">
                                <ul>
                                <li>
                                    <i class="far fa-phone"></i
                                    ><a href="tel:+9104312670699">+91 0431-2670699</a>
                                </li>
                                <li class="d-none d-xl-inline-block">
                                    <i class="far fa-envelope"></i
                                    ><a href="mailto:principal@krce.ac.in">principal@krce.ac.in</a>
                                </li>
                                <li><i class="far fa-map-marker"></i>Samayapuram, Tiruchirappalli</li>
                                </ul>
                            </div>
                            </div>
                        <div class="col-auto">
                            <div class="header-links header-right">
                                <ul>
                                    <li>
                                        <div class="header-social">
                                            <span class="social-title"
                                                >Follow Us:</span
                                            >
                                            <a href="https://www.facebook.com/"
                                                ><i
                                                    class="fab fa-facebook-f"
                                                ></i
                                            ></a>
                                            <a href="https://www.twitter.com/"
                                                ><i class="fab fa-twitter"></i
                                            ></a>
                                            <a href="https://www.linkedin.com/"
                                                ><i
                                                    class="fab fa-linkedin-in"
                                                ></i
                                            ></a>
                                            <a href="https://www.youtube.com/"
                                                ><i class="fab fa-youtube"></i
                                            ></a>
                                            <a href="https://www.instagram.com/"
                                                ><i class="fab fa-skype"></i
                                            ></a>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-wrapper">
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto d-flex">
                                <div class="header-logo me-4">
                                    <a href="index.html"><img class='logo kr_logo' style="width: 80px; height:90px" src="{{asset('assets/custom/kr_logo.png')}}" alt="KRCE" /></a>
                                </div>
                                <div class="header-logo me-4" id=clg_logo"">
                                    <a href="index.html" ><img class='logo clg_logo' src="{{asset('assets/custom/logo.png')}}" alt="KRCE"/></a>
                                </div>
                                <div class="header-logo me-4">
                                    <a href="index.html"><img class='logo clg_code' width="90" src="{{asset('assets/custom/clg_code.png')}}" alt="KRCE" /></a>
                                </div>
                                <div class="header-logo me-4">
                                    <a href="index.html"><img class='logo' width="90" src="{{asset('assets/custom/mba_img.png')}}" alt="KRCE" /></a>
                                </div>
                                <div class="header-logo me-4">
                                    <a href="index.html"><img class='logo naac_logo' width="90" src="{{asset('assets/custom/naac_img.png')}}" alt="KRCE" /></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                    <div class="col-auto">
                                        <nav
                                            class="main-menu d-none d-lg-inline-block"
                                        >
                                        
                                          <ul>
                                                <li>
                                                    <a href="#about-sec"
                                                        >About Us</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#event-sec"
                                                        >Events</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#team-sec"
                                                        >Management</a
                                                    >
                                                </li>
                                                {{-- <li>
                                                    <a href="#blog-sec">Blog</a>
                                                </li> --}}
                                                <li>
                                                    <a href="#contact-sec"
                                                        >Contact Us</a
                                                    >
                                                </li>
                                            </ul>
                                        </nav>
                                        <button
                                            type="button"
                                            class="th-menu-toggle d-block d-lg-none"
                                        >
                                            <i class="far fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto d-none d-xl-block">

                                        <div class="header-button">
                                            <button
                                                type="button"
                                                class="icon-btn searchBoxToggler"
                                            >
                                                <i class="far fa-search"></i>
                                            </button>
                                            {{--
                                            <a
                                                href="wishlist.html"
                                                class="icon-btn"
                                                ><i class="far fa-heart"></i>
                                                <span class="badge">3</span> </a
                                            ><button
                                                type="button"
                                                class="icon-btn sideMenuToggler"
                                            >
                                                <i
                                                    class="far fa-shopping-cart"
                                                ></i>
                                                <span class="badge">5</span>
                                            </button>
                                            <a
                                                href="#contact-sec"
                                                class="th-btn ml-25"
                                                >Contact Us
                                                <i
                                                    class="fas fa-arrow-right ms-1"
                                                ></i
                                            ></a>
                                            --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="th-hero-wrapper hero-1" id="hero">
            <div
                class="hero-slider-1 th-carousel"
                data-fade="true"
                data-slide-show="1"
                data-md-slide-show="1"
                data-dots="true"
            >
                <div class="th-hero-slide">
                    <div
                        class="th-hero-bg"
                        data-overlay="title"
                        data-opacity="8"
                        data-bg-src="{{asset('assets/img/hero/drone_view.jpeg')}}"
                    ></div>
                    <div class="container">
                        <div
                            class="row align-items-center justify-content-center"
                        >
                            <div class="col-md-6">
                                <div class="hero-style1">
                                    <span
                                        class="hero-subtitle"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.1s"
                                        ><span>Vision</span></span
                                    >
                                    <h1
                                        class="hero-title text-white"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.4s"
                                    >
                                    “ To achieve a prominent position among the top technical institutions ”
                                        <span class="text-theme"></span>
                                    </h1>
                                    <p
                                        class="hero-text"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.6s"
                                    >
                                        Education can be thought of as the
                                        transmission of the values and
                                        accumulated knowledge of a society. In
                                        this sense, it is equivalent.
                                    </p>
                                    <div
                                        class="btn-group"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.8s"
                                    >
                                        <a
                                            href="#contact-sec"
                                            class="th-btn style3"
                                            >Apply Now<i
                                                class="fas fa-arrow-right ms-2"
                                            ></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-lg-end text-center">
                                <div class="hero-img1">
                                    <img style="width:660px; height:660px"
                                        src="{{asset('assets/img/hero/banner_img.png')}}"
                                        alt="hero"

                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-shape shape1">
                        <img src="{{asset('assets/img/hero/shape_1_1.png')}}" alt="shape" />
                    </div>
                    <div class="hero-shape shape2">
                        <img src="{{asset('assets/img/hero/shape_1_2.png')}}" alt="shape" />
                    </div>
                    <div class="hero-shape shape3"></div>
                    <div
                        class="hero-shape shape4 shape-mockup jump-reverse"
                        data-right="3%"
                        data-bottom="7%"
                    >
                        <img src="{{asset('assets/img/hero/shape_1_3.png')}}" alt="shape" />
                    </div>
                    <div
                        class="hero-shape shape5 shape-mockup jump-reverse"
                        data-left="0"
                        data-bottom="0"
                    >
                        <img src="{{asset('assets/img/hero/shape_1_4.png')}}" alt="shape" />
                    </div>
                </div>
                <div class="th-hero-slide">
                    <div
                        class="th-hero-bg"
                        data-overlay="title"
                        data-opacity="8"
                        data-bg-src="{{asset('assets/img/hero/student_study.png')}}"
                    ></div>
                    <div class="container">
                        <div
                            class="row align-items-center justify-content-center"
                        >
                            <div class="col-md-6">
                                <div class="hero-style1">
                                  
                                    <h1
                                        class="hero-title text-white"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.4s"
                                    >
                                    <span>
                                        <span class="text-theme">Mission</span>
                                    </h1>
                                    <p
                                        class="hero-text"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.6s"
                                    >
                                    To bestow standard technical education par excellence through state of the art infrastructure, competent faculty and high ethical standards.
                                    To nurture research and entrepreneurial skills among students in cutting edge technologies.
                                    To provide education for developing high-quality professionals to transform the society
                                    </p>
                                    <div
                                        class="btn-group"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.8s"
                                    >
                                        <a
                                            href="#contact-sec"
                                            class="th-btn style3"
                                            >Get Started<i
                                                class="fas fa-arrow-right ms-2"
                                            ></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-lg-end text-center">
                                <div class="hero-img1">
                                    <img style="width:660px; height:660px"
                                        src="{{asset('assets/img/hero/hero_banner_thumb.png')}}"
                                        alt="hero"
                                        style="width:660x;height:660px;"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-shape shape1">
                        <img src="{{asset('assets/img/hero/shape_1_1.png')}}" alt="shape" />
                    </div>
                    <div class="hero-shape shape2">
                        <img src="{{asset('assets/img/hero/shape_1_2.png')}}" alt="shape" />
                    </div>
                    <div class="hero-shape shape3"></div>
                    <div
                        class="hero-shape shape4 shape-mockup jump-reverse"
                        data-right="3%"
                        data-bottom="7%"
                    >
                        <img src="{{asset('assets/img/hero/shape_1_3.png')}}" alt="shape" />
                    </div>
                    <div
                        class="hero-shape shape5 shape-mockup jump-reverse"
                        data-left="0"
                        data-bottom="0"
                    >
                        <img src="{{asset('assets/img/hero/shape_1_4.png')}}" alt="shape" />
                    </div>
                </div>
                <div class="th-hero-slide">
                    <div
                        class="th-hero-bg"
                        data-overlay="title"
                        data-opacity="8"
                        data-bg-src="{{asset('assets/img/hero/student_lab.png')}}"
                    ></div>
                    <div class="container">
                        <div
                            class="row align-items-center justify-content-center"
                        >
                            <div class="col-md-6">
                                <div class="hero-style1">
                                    <span
                                        class="hero-subtitle"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.1s"
                                        ><span>ABOUT KRCE</span> </span
                                    >
                                    <h1
                                        class="hero-title text-white"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.4s"
                                    >
                                        
                                        <span class="text-theme"
                                            >Institute</span
                                        >
                                    </h1>
                                    <p
                                        class="hero-text"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.6s"
                                    >
                                    Established in the year 2008 K. Ramakrishnan college of Engineering is a leading Engineering college affiliated to Anna University, Chennai, providing valuable courses. K.RAMAKRISHNAN COLLEGE OF ENGINEERING, TIRUCHIRAPALLI, is located in the famous temple town of Shri Samayapuram Mariyamman temple, on the sprawling campus of 30 acres with a panoramic and pleasant view.
                                    </p>
                                    <div
                                        class="btn-group"
                                        data-ani="slideinleft"
                                        data-ani-delay="0.8s"
                                    >
                                        <a
                                            href="#contact-sec"
                                            class="th-btn style3"
                                            >Get Started<i
                                                class="fas fa-arrow-right ms-2"
                                            ></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-lg-end text-center">
                                <div class="hero-img1">
                                    <img  style="width:660px; height:660px"
                                        src="{{asset('assets/img/gallery/Colleges/staffs/managements.jpeg')}}"
                                        alt="hero"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-shape shape1">
                        <img src="{{asset('assets/img/hero/shape_1_1.png')}}" alt="shape" />
                    </div>
                    <div class="hero-shape shape2">
                        <img src="{{asset('assets/img/hero/shape_1_2.png')}}" alt="shape" />
                    </div>
                    <div class="hero-shape shape3"></div>
                    <div
                        class="hero-shape shape4 shape-mockup jump-reverse"
                        data-right="3%"
                        data-bottom="7%"
                    >
                        <img src="{{asset('assets/img/hero/shape_1_3.png')}}" alt="shape" />
                    </div>
                    <div
                        class="hero-shape shape5 shape-mockup jump-reverse"
                        data-left="0"
                        data-bottom="0"
                    >
                        <img src="{{asset('assets/img/hero/shape_1_4.png')}}" alt="shape" />
                    </div>
                </div>
            </div>
        </div>

        <div class="space-top">
            <div class="container">
                <div class="category-sec-wrap">
                    <div
                        class="shape-mockup category-shape-arrow d-xl-block d-none"
                    >
                        <img
                            src="{{asset('assets/img/normal/category-arrow.svg')}}"
                            alt="img"
                        />
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div
                                class="title-area mb-25 mb-lg-0 text-xl-start text-center"
                            >
                                <span class="sub-title"
                                    ><i class="fal fa-book me-2"></i> Courses
                                    Categories</span
                                >
                                <h2 class="sec-title">
                                    Explore Top Categories
                                </h2>
                                <a href="course.html" class="th-btn"
                                    >View All Category<i
                                        class="fa-regular fa-arrow-right ms-2"
                                    ></i
                                ></a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div
                                class="row slider-shadow th-carousel category-slider"
                                data-slide-show="4"
                                data-ml-slide-show="3"
                                data-md-slide-show="3"
                                data-sm-slide-show="2"
                                data-arrows="true"
                                data-xl-arrows="true"
                            >
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img
                                                src="{{asset('assets/img/icon/cat-1_1.svg')}}"
                                                alt="image"
                                            />
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html"
                                                    >Artificial Intelligence with Data Science</a
                                                >
                                            </h3>
                                            <p class="category-card_text">
                                                {{-- course count --}}
                                            </p>
                                            <a
                                                href="#"
                                                class="th-btn"
                                                >Learn More
                                                <i
                                                    class="fa-solid fa-arrow-right ms-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img
                                                src="{{asset('assets/img/icon/cat-1_2.svg')}}"
                                                alt="image"
                                            />
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html"
                                                    >Artificial Intelligence with Machine Learning</a
                                                >
                                            </h3>
                                            <p class="category-card_text">
                                                {{-- course count --}}
                                            </p>
                                            <a
                                                href="#"
                                                class="th-btn"
                                                >Learn More
                                                <i
                                                    class="fa-solid fa-arrow-right ms-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img
                                                src="{{asset('assets/img/icon/cat-1_1.svg')}}"
                                                alt="image"
                                            />
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html"
                                                    >Information Technology</a
                                                >
                                            </h3>
                                            <p class="category-card_text">
                                                
                                            </p>
                                            <a
                                                href="#"
                                                class="th-btn"
                                                >Learn More
                                                <i
                                                    class="fa-solid fa-arrow-right ms-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img
                                                src="{{asset('assets/img/icon/cat-1_4.svg')}}"
                                                alt="image"
                                            />
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html"
                                                    >Electronics and Communication Engineering</a
                                                >
                                            </h3>
                                            <p class="category-card_text">
                                                {{-- course count --}}
                                            </p>
                                            <a
                                                href="#"
                                                class="th-btn"
                                                >Learn More
                                                <i
                                                    class="fa-solid fa-arrow-right ms-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img
                                                src="{{asset('assets/img/icon/cat-1_1.svg')}}"
                                                alt="image"
                                            />
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html"
                                                    >Electrical and Electronics Engineering</a
                                                >
                                            </h3>
                                            <p class="category-card_text">
                                                {{-- course count --}}
                                            </p>
                                            <a
                                                href="#"
                                                class="th-btn"
                                                >Learn More
                                                <i
                                                    class="fa-solid fa-arrow-right ms-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img
                                                src="{{asset('assets/img/icon/cat-1_2.svg')}}"
                                                alt="image"
                                            />
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html"
                                                    >Computer Science and Engineering</a
                                                >
                                            </h3>
                                            <p class="category-card_text">
                                                {{-- course count --}}
                                            </p>
                                            <a
                                                href="#"
                                                class="th-btn"
                                                >Learn More
                                                <i
                                                    class="fa-solid fa-arrow-right ms-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- we complted --}}
        <div class="space overflow-hidden" id="about-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="img-box1 mb-40 mb-xl-0">
                            <div class="img1">
                                <img
                                    class="tilt-active"
                                    
                                    src="{{asset('assets/img/normal/about_bg-1.png')}}"
                                    alt="About"
                                    style="width:444px;height:444px;object-fit: cover;"
                                />
                            </div>
                            <div
                                class="about-grid"
                                data-bg-src="{{asset('assets/img/normal/about_1_3.png')}}"
                            >
                                <h3 class="about-grid_year">
                                    <span class="counter-number">5</span>k<span
                                        class="text-theme"
                                        >+</span
                                    >
                                </h3>
                                <p class="about-grid_text">
                                    Students Active Our Courses
                                </p>
                            </div>
                            <div class="img2">
                                <img  class="tilt-active" src="{{asset('assets/img/hero/student_study.png')}}" alt="About"  style="width:340px;height:265x;object-fit: cover;"/>
                            </div>
                            <div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0" >
                                <img  src="{{asset('assets/img/normal/about_1_shape1.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="title-area mb-30">
                            <span class="sub-title"
                                ><i class="fal fa-book me-2"></i> About Us</span
                            >
                            <h2 class="sec-title">
                                Welcome to KRCE.
                            </h2>
                        </div>
                        <p class="mt-n2 mb-25">
                            Established in the year 2008 K. Ramakrishnan college of Engineering is a leading Engineering college affiliated to Anna University, Chennai, providing valuable courses. K.RAMAKRISHNAN COLLEGE OF ENGINEERING, TIRUCHIRAPALLI, is located in the famous temple town of Shri Samayapuram Mariyamman temple, on the sprawling campus of 30 acres with a panoramic and pleasant view.
                        </p>
                        <p>
                            
                            <span class="sub_heading"><i class="fal fa-book me-2"></i> Achievements</span>
                              <p class='text-intent2px'>We achieve a prominent position among the top technical institutions</p>

                            <span class="sub_heading"><i class="fal fa-book me-2"></i> Education</span>
                            
                            <p class='text-intent2px'>We provide education for developing high-quality professionals to transform the society</p>

                            <span class="sub_heading"><i class="fal fa-book me-2"></i> Research</span>                           
                            
                            <p class='text-intent2px'> We nurture research and entrepreneurial skills among students in cutting edge technologies</p>
                        </p>
                        <div class="row align-items-center">
                            <div class="col-md-auto">
                                <div class="about-grid_img mb-30 mb-md-0">
                                    <img style="width: 210; height:103px"
                                        src="{{asset('assets/img/gallery/Colleges/arch/gate.jpg')}}"
                                        alt="img"
                                    />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="checklist">
                                    <ul>
                                        <li>
                                            Get access of our top
                                            courses
                                        </li>
                                        <li>Popular topics to learn now</li>
                                        <li>
                                            Find the right instructor for you
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group mt-40">
                            <a href="#about-sec" class="th-btn"
                                >About More<i
                                    class="fa-regular fa-arrow-right ms-2"
                                ></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      {{-- event here --}}
      <section id="event-sec" class="space" data-bg-src="{{asset('assets/img/bg/event-bg_1.png')}}">
        <div
            class="shape-mockup event-shape1 jump"
            data-top="0"
            data-left="-60px"
        >
            <img src="{{asset('assets/img/team/team-shape_1_1.png')}}" alt="img" />
        </div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"
                    ><i class="fal fa-book me-2"></i> Fetaured Events</span
                >
                <h2 class="sec-title">Our Upcoming Events</h2>
            </div>
            <div
                class="row slider-shadow event-slider-1 th-carousel gx-70"
                data-slide-show="3"
                data-lg-slide-show="3"
                data-md-slide-show="1"
                data-sm-slide-show="1"
                data-xs-slide-show="1"
                data-arrows="true"
            >

                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img style="width:200px; height:200px"
                                src="{{asset('assets/img/gallery/Colleges/events/event1.jpg')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src=""
                                    />
                                </div>
                                 <div class="details">
                                    {{-- <span class="author-name"
                                        >KRCE</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p> --}}
                                </div> 
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i>Samayapuram, Trichy
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>08:00 am -
                                    10:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >KRCE</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img style="width:200px; height:200px"
                                src="{{asset('assets/img/gallery/Colleges/events/event2.jpg')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src=""
                                    />
                                </div>
                                 <div class="details">
                                    {{-- <span class="author-name"
                                        >KRCE</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p> --}}
                                </div> 
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i>Samayapuram, Trichy
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>08:00 am -
                                    10:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >KRCE</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img style="width:200px; height:200px"
                                src="{{asset('assets/img/gallery/Colleges/events/event3.jpg')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src=""
                                    />
                                </div>
                                 <div class="details">
                                    {{-- <span class="author-name"
                                        >KRCE</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p> --}}
                                </div> 
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i>Samayapuram, Trichy
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>08:00 am -
                                    10:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >KRCE</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img style="width:200px; height:200px"
                                src="{{asset('assets/img/gallery/Colleges/events/event5.jpg')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src=""
                                    />
                                </div>
                                 <div class="details">
                                    {{-- <span class="author-name"
                                        >KRCE</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p> --}}
                                </div> 
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i>Samayapuram, Trichy
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>08:00 am -
                                    10:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >KRCE</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-2.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author2.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >Adam Jhon</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i
                                    >Hilton, NewYork,
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>10:00 am -
                                    11:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >Embrace the world of online
                                    education</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-3.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author3.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >Michael Rich</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i>147,
                                    Green Road
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>11:00 am -
                                    12:00 pm
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >Gain insights into how parents can
                                    support</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-4.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author4.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >Anadi Juila</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i
                                    >Kipling, London,
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>08:00 am -
                                    10:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >Exploring New Frontiers in Education</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-5.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author1.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >David Smith</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i
                                    >Paris, France,
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>10:00 am -
                                    11:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >A Journey of Educational Excellence</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-6.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author2.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >Adam Jhon</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i
                                    >Broly, NewYork,
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>11:00 am -
                                    12:00 pm
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >Unleashing the Potential of
                                    Education</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-7.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author3.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >Michael Rich</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i
                                    >Easton, USA,
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>08:00 am -
                                    10:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >Preparing Students for Tomorrow,s
                                    Challenges</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-8.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author4.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >Anadi Juila</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i
                                    >Sharjah, UAE,
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>10:00 am -
                                    11:00 am
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >Embracing Technology in Education</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div
                            class="event-card_img"
                            data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}"
                        >
                            <img
                                src="{{asset('assets/img/event/event_img-9.png')}}"
                                alt="event"
                            />
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img
                                        src="{{asset('assets/img/event/event-author1.png')}}"
                                        alt="avater"
                                    />
                                </div>
                                <div class="details">
                                    <span class="author-name"
                                        >David Smith</span
                                    >
                                    <p class="author-desig">
                                        Chief - Executive
                                    </p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p>
                                    <i class="fal fa-location-dot"></i>Al
                                    Road, Dubai,
                                </p>
                                <p>
                                    <i class="fal fa-clock"></i>11:00 am -
                                    12:00 pm
                                </p>
                            </div>
                            <h3 class="event-card_title">
                                <a href="event-details.html"
                                    >Redefining Learning for the 21st
                                    Century</a
                                >
                            </h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn"
                                    >View Event
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img
                                    src="{{asset('assets/img/event/event-box-shape1.png')}}"
                                    alt="img"
                                />
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div> 
        </div>
    </section>

        <div class="cta-area-1" data-bg-src="{{asset('assets/img/bg/cta-bg1.png')}}">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-8">
                        <div class="cta-wrap title-area mb-0">
                            <div class="cta-icon">
                                <img
                                    src="{{asset('assets/img/normal/cta-icon1.png')}}"
                                    alt="icon"
                                />
                            </div>
                            <div class="cta-content">
                                <h2 class="cta-title sec-title">
                                    Admission Now
                                </h2>
                                <p class="cta-text">
                                    Education is a journey, and every step, no matter how hard, takes me forward.
                                </p>
                            </div>
                            <a href="#contact-sec" class="th-btn style8"
                                >Join With Us<i
                                    class="fas fa-arrow-right ms-1"
                                ></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-img-1" data-overlay="title" data-opacity="8">
                <img src="{{asset('assets/img/normal/cta_1_1.png')}}" alt="Image" />
                <a
                    href="https://www.youtube.com/watch?v=sukWav-EaLw"
                    class="play-btn style2 popup-video"
                    ><i class="fa-sharp fa-solid fa-play"></i
                ></a>
            </div>
        </div>
        <div class="why-area-1 space overflow-hidden">
            <div
                class="shape-mockup why-shape-1 jump"
                data-top="10%"
                data-left="7%"
            >
                <img src="{{asset('assets/img/normal/about_1_shape1.png')}}" alt="img" />
            </div>
            <div
                class="shape-mockup why-shape-2"
                data-bg-src="{{asset('assets/img/normal/wcu_1_shape1.png')}}"
            ></div>
            <div
                class="shape-mockup why-shape-3 jump-reverse"
                data-bottom="25%"
                data-right="-3%"
            >
                <img src="{{asset('assets/img/normal/wcu_1_shape2.png')}}" alt="img" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="wcu-img-1">
                            <div class="img1">
                                <img 
                                    src="{{asset('assets/img/gallery/Colleges/students/std2.png')}}"
                                    alt="img"
                                     style="width:620px;height:474px;object-fit: cover;"
                                />
                            </div>
                            <div class="student-count jump-reverse">
                                <h5 class="title">
                                    <span class="text-theme"
                                        ><span class="counter-number">100</span
                                        >+</span
                                    >
                                    Active Companies
                                </h5>
                                {{-- <img
                                    src="{{asset('assets/img/normal/student-group_1_1.png')}}"
                                    alt="img"
                                /> --}}
                                
                                <div class="image-container">
                                    <img src="{{ asset('assets/img/gallery/Colleges/placement/company1.png') }}" alt="Company 1">
                                    <img src="{{ asset('assets/img/gallery/Colleges/placement/company2.png') }}" alt="Company 2">
                                    <img src="{{ asset('assets/img/gallery/Colleges/placement/company3.png') }}" alt="Company 3">
                                    <img src="{{ asset('assets/img/gallery/Colleges/placement/company4.png') }}" alt="Company 4">
                                    <img src="{{ asset('assets/img/gallery/Colleges/placement/company5.png') }}" alt="Company 5">
                                    <div class="more-count">100+</div>
                                </div>

                            </div>
                            <div class="text-end">
                                <a class="th-btn mt-30" href="#contact-sec"
                                    >Get Started
                                    <i class="far fa-arrow-right ms-1"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="wcu-wrap1">
                            <div class="title-area mb-25">
                                <span class="sub-title"
                                    ><i class="fal fa-book me-2"></i> WHY CHOOSE
                                    US</span
                                >
                                <h2 class="sec-title">
                                    More Experts Staff
                                    To Help.
                                </h2>
                                <p class="sec-text mt-20">

                                    
                                        At KRCE, we are committed to excellence in education, innovation, and student success. Here’s why we stand out:
                            
                                        <span class="sub_heading">  ✅ Top-Quality Education</span>
                                          <p class='text-intent2px'>Our rigorous academic programs are designed to equip students with real-world skills and knowledge.</p>
            
                                        <span class="sub_heading"> ✅ Experienced Faculty</span>
                                        
                                        <p class='text-intent2px'>Learn from industry experts and experienced educators who are dedicated to your success.</p>
            
                                        <span class="sub_heading"> ✅ State-of-the-Art Facilities</span>                           
                                        
                                        <p class='text-intent2px'>Modern classrooms, advanced labs, and a well-stocked library provide the perfect learning environment.</p>
                                       
                                        <span class="sub_heading"> ✅ Career Opportunities</span>
                                        
                                        <p class='text-intent2px'>Strong industry connections, internship programs, and career counseling to help you land your dream job.</p>
            
                                        <span class="sub_heading"> ✅ Global Exposure</span>                           
                                        
                                        <p class='text-intent2px'>International collaborations, exchange programs, and opportunities to connect with students worldwide.</p>
                               
                                        <span class="sub_heading"> ✅ Vibrant Campus Life</span>                           
                                        
                                        <p class='text-intent2px'>A diverse community with clubs, cultural events, and extracurricular activities that enhance personal growth.</p>
                                       
                                        <h4>Join us at KRCE and take the first step toward a successful future!</h4>
                                    
                                    
                                    
                                </p>
                            </div>
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="wcu-box">
                                        <div class="wcu-box_icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="wcu-box_details">
                                            <h3 class="box-title">
                                                World Class Trainers
                                            </h3>
                                            <p class="wcu-box_text">
                                                Seamlessly envisioneer tactical
                                                data through services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wcu-box">
                                        <div class="wcu-box_icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="wcu-box_details">
                                            <h3 class="box-title">
                                                Easy Learning
                                            </h3>
                                            <p class="wcu-box_text">
                                                Seamlessly envisioneer tactical
                                                data through services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wcu-box">
                                        <div class="wcu-box_icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="wcu-box_details">
                                            <h3 class="box-title">Flexible</h3>
                                            <p class="wcu-box_text">
                                                Seamlessly envisioneer tactical
                                                data through services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wcu-box">
                                        <div class="wcu-box_icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="wcu-box_details">
                                            <h3 class="box-title">
                                                Affordable Price
                                            </h3>
                                            <p class="wcu-box_text">
                                                Seamlessly envisioneer tactical
                                                data through services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div
                class="counter-area-1 bg-theme"
                data-bg-src="{{asset('assets/img/bg/counter-bg_1.png')}}"
            >
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-xl-3 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="counter-card_number">
                                <span class="counter-number">4.5</span>k<span
                                    class="fw-normal"
                                    >+</span
                                >
                            </h2>
                            <p class="counter-card_text">
                                <strong>Placement</strong> Students
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="counter-card_number">
                                <span class="counter-number">5</span>k<span
                                    class="fw-normal"
                                    >+</span
                                >
                            </h2>
                            <p class="counter-card_text">
                                <strong>Number Of Active</strong> Students
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="counter-card_number">
                                <span class="counter-number">150</span><span
                                    class="fw-normal"
                                    >+</span
                                >
                            </h2>
                            <p class="counter-card_text">
                                <strong>Number Of Active</strong> Staffs
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 counter-card-wrap">
                        <div class="counter-card">
                            <h2 class="counter-card_number">
                                <span class="counter-number">40</span><span
                                    class="fw-normal"
                                    >+</span
                                >
                            </h2>
                            <p class="counter-card_text">
                                <strong>subjects over 4 years </strong> (8 semesters)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="cta-area-2 position-relative space-bottom">
            <div
                class="cta-bg-img"
                data-bg-src="{{asset('assets/img/bg/cta-bg2.png')}}"
            ></div>
            <div
                class="cta-bg-img2"
                data-bg-src="{{asset('assets/img/bg/cta-bg2-shape.png')}}"
            ></div>
            <div
                class="shape-mockup cta-shape1 jump d-md-block d-none"
                data-left="-2%"
                data-bottom="-7%"
            >
                <img src="{{asset('assets/img/normal/cta_2_shape1.png')}}" alt="img" />
            </div>
            <div
                class="shape-mockup cta-shape2 jump-reverse d-md-block d-none"
                data-right="-1%"
                data-top="-3%"
            >
                <img src="{{asset('assets/img/normal/cta_2_shape2.png')}}" alt="img" />
            </div>
            <div
                class="shape-mockup cta-shape3 spin d-md-block d-none"
                data-right="20%"
                data-top="30%"
            >
                <img src="{{asset('assets/img/normal/cta_2_shape3.png')}}" alt="img" />
            </div>
            <div class="container text-center">
                <div class="cta-wrap2">
                    <div class="title-area text-center mb-35">
                        <span class="sub-title"
                            ><i class="fal fa-book me-2"></i>Are You Ready for This Offer?</span
                        >
                        <h2 class="sec-title text-white">
                            🎉 40% Off for the First 100 Students! 🎉
                            <span class="text-theme2">100 Student’s</span> For
                            Featured<br /><span class="fw-normal"
                                >Topics by Education Category</span
                            >
                        </h2>
                        <p class="cta-text">
                            Unlock featured topics in the education category and get unlimited access to 6,000+ of Udemy’s top courses for your institution. 🚀
                        </p>    
                    </div>
                    <div class="btn-group justify-content-center">
                        <a href="#contact-sec" class="th-btn style3"
                            >Join With Us<i class="fas fa-arrow-right ms-2"></i
                        ></a>
                        <a href="#contact-sec" class="th-btn style2"
                            >Become A Teacher<i
                                class="fas fa-arrow-right ms-2"
                            ></i
                        ></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="team-area overflow-hidden space" id="team-sec">
            <div
                class="shape-mockup team-bg-shape1 jump-reverse d-xxl-block d-none"
                data-left="-2%"
                data-top="0"
            >
                <img src="{{asset('assets/img/team/team-shape_1_1.png')}}" alt="img" />
            </div>
            <div
                class="shape-mockup team-bg-shape2 jump d-xxl-block d-none"
                data-left="40%"
                data-top="20%"
            >
                <img src="{{asset('assets/img/team/team-shape_1_2.png')}}" alt="img" />
            </div>
            <div
                class="shape-mockup team-bg-shape3 jump"
                data-left="5%"
                data-bottom="9%"
            >
                <img src="{{asset('assets/img/team/team-shape_1_3.png')}}" alt="img" />
            </div>
            <div
                class="shape-mockup team-bg-shape4 spin"
                data-left="40%"
                data-bottom="20%"
            >
                <img src="{{asset('assets/img/team/team-shape_1_4.png')}}" alt="img" />
            </div>
            <div
                class="shape-mockup team-bg-shape5 jump d-lg-block d-none"
                data-right="-7%"
                data-top="10%"
            >
                <img src="{{asset('assets/img/team/team-shape_1_5.png')}}" alt="img" />
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 mb-40 mb-xl-0">
                        <div class="title-area mb-30">
                            <span class="sub-title"
                                ><i class="fal fa-book me-2"></i> Management</span
                            >
                            <h2 class="sec-title">
                                Meet Our Founders
                            </h2>
                            <p class="sec-text mt-20">
                                At KRCE, our leadership team is dedicated to shaping the future of education with a vision for excellence and innovation. Meet the visionaries behind our institution.
                            </p>
                            <p class="sec-text">
                                The institution takes pride in its alumni
                                network, which serves as a testament to the
                                quality of education and the opportunities
                                provided by the Autonomous institution.
                            </p>
                        </div>
                        <div class="btn-group mt-30">
                            {{-- <a href="course.html" class="th-btn"
                                >Explore Courses<i
                                    class="fas fa-arrow-right ms-2"
                                ></i
                            ></a> --}}
                            <a href="#contact-sec" class="th-btn style7"
                                >Contact Us<i
                                    class="fas fa-arrow-right ms-2"
                                ></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div
                            class="team-card team-card-1-1 team-card-1-1-active mt-0"
                        >
                            <div class="team-img-wrap">
                                <div class="team-img">
                                    {{-- founder --}}

                                    <img style="width:340px; height:240px;" src="{{asset('assets/img/gallery/Colleges/staffs/krce_owner.jpg')}}"  alt="Team" />
                                </div>
                            </div>
                            <div class="team-hover-wrap">
                                <div class="team-social">
                                    <a href="#" class="icon-btn"
                                        ><i class="far fa-plus"></i
                                    ></a>
                                    <div class="th-social">
                                        <a
                                            target="_blank"
                                            href="https://vimeo.com/"
                                            ><i class="fab fa-vimeo-v"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://linkedin.com/"
                                            ><i class="fab fa-linkedin-in"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://twitter.com/"
                                            ><i class="fab fa-twitter"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://facebook.com/"
                                            ><i class="fab fa-facebook-f"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="team-title">
                                        <a href="team-details.html"
                                            >Mr.M.Kumarasamy</a
                                        >
                                    </h3>
                                    <span class="team-desig">Owner</span>
                                </div>
                                <div class="team-info">
                                    {{-- <span
                                        ><i class="fal fa-file-check"></i>2
                                        Courses</span
                                    >
                                    <span
                                        ><i class="fa-light fa-users"></i
                                        >Students 60+</span
                                    > --}}
                                </div>
                            </div>
                        </div>
                        <div class="team-card team-card-1-1">
                            <div class="team-img-wrap">
                                <div class="team-img">
                                    {{-- Director --}}
                                    <img  style="width:340px; height:250px;" 
                                        src="{{asset('assets/img/gallery/Colleges/staffs/KRCE_ed.jpg')}}"
                                        alt="Team"
                                    />
                                </div>
                            </div>
                            <div class="team-hover-wrap">
                                <div class="team-social">
                                    <a href="#" class="icon-btn"
                                        ><i class="far fa-plus"></i
                                    ></a>
                                    <div class="th-social">
                                        <a
                                            target="_blank"
                                            href="https://vimeo.com/"
                                            ><i class="fab fa-vimeo-v"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://linkedin.com/"
                                            ><i class="fab fa-linkedin-in"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://twitter.com/"
                                            ><i class="fab fa-twitter"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://facebook.com/"
                                            ><i class="fab fa-facebook-f"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="team-title">
                                        <a href="team-details.html"
                                            >Dr.S.Kuppusamy</a
                                        >
                                    </h3>
                                    <span class="team-desig"
                                        >Executive Director</span
                                    >
                                </div>
                                <div class="team-info">
                                    {{-- <span
                                        ><i class="fal fa-file-check"></i>3
                                        Courses</span
                                    >
                                    <span
                                        ><i class="fa-light fa-users"></i
                                        >Students 50+</span
                                    > --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="team-card team-card-1-2 mt-md-0">
                            <div class="team-img-wrap">
                                <div class="team-img">
                                    {{-- founder --}}
                                    <img style="width:340px; height:250px;" 
                                        src="{{asset('assets/img/gallery/Colleges/staffs/krce_chairman.jpg')}}"
                                        alt="Team"
                                    />
                                </div>
                            </div>
                            <div class="team-hover-wrap">
                                <div class="team-social">
                                    <a href="#" class="icon-btn"
                                        ><i class="far fa-plus"></i
                                    ></a>
                                    <div class="th-social">
                                        <a
                                            target="_blank"
                                            href="https://vimeo.com/"
                                            ><i class="fab fa-vimeo-v"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://linkedin.com/"
                                            ><i class="fab fa-linkedin-in"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://twitter.com/"
                                            ><i class="fab fa-twitter"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://facebook.com/"
                                            ><i class="fab fa-facebook-f"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="team-title">
                                        <a href="team-details.html"
                                            >Dr.K.Ramakrishnan</a
                                        >
                                    </h3>
                                    <span class="team-desig"
                                        >Founder & Chairman</span
                                    >
                                </div>
                                <div class="team-info">
                                    {{-- <span
                                        ><i class="fal fa-file-check"></i>4
                                        Courses</span
                                    >
                                    <span
                                        ><i class="fa-light fa-users"></i
                                        >Students 30+</span
                                    > --}}
                                </div>
                            </div>
                        </div>
                        <div
                            class="team-card team-card-1-2 team-card-1-2-active"
                        >
                        {{-- primicple --}}
                            <div class="team-img-wrap">
                                <div class="team-img">
                                    <img style="width:340px; height:250px;" src="{{asset('assets/img/gallery/Colleges/staffs/principal_new.jpg')}}" alt="Team" />
                                </div>
                            </div>
                            <div class="team-hover-wrap">
                                <div class="team-social">
                                    <a href="#" class="icon-btn"
                                        ><i class="far fa-plus"></i
                                    ></a>
                                    <div class="th-social">
                                        <a
                                            target="_blank"
                                            href="https://vimeo.com/"
                                            ><i class="fab fa-vimeo-v"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://linkedin.com/"
                                            ><i class="fab fa-linkedin-in"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://twitter.com/"
                                            ><i class="fab fa-twitter"></i
                                        ></a>
                                        <a
                                            target="_blank"
                                            href="https://facebook.com/"
                                            ><i class="fab fa-facebook-f"></i
                                        ></a>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="team-title">
                                        <a href="team-details.html"
                                            >Dr.D.Srinivasan</a
                                        >
                                    </h3>
                                    <span class="team-desig"
                                        >Principal</span
                                    >
                                </div>
                                <div class="team-info">
                                    {{-- <span
                                        ><i class="fal fa-file-check"></i>4
                                        Courses</span
                                    >
                                    <span
                                        ><i class="fa-light fa-users"></i
                                        >Students 70+</span
                                    > --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div
                            class="title-area mb-lg-0 text-lg-start text-center"
                        >
                            <span class="sub-title"
                                ><i class="fal fa-book me-2"></i> Our Trusted
                                Partners</span
                            >
                            <h2 class="sec-title mb-0">
                                We Have More Than
                                <span class="text-theme"
                                    ><span class="counter-number">50</span
                                    >+</span
                                >
                                Global Partners
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="client-wrap text-lg-end text-center">
                            <div class="row gy-40">
                                <div class="col-3"> 
                                    <a href="blog.html" class="client-thumb"><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company1.png')}}"  alt="img"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="blog.html" class="client-thumb"
                                        ><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company2.png')}}"  alt="img"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="blog.html" class="client-thumb"
                                        ><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company3.png')}}"  alt="img"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="blog.html" class="client-thumb"
                                        ><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company4.png')}}"  alt="img"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="blog.html" class="client-thumb"
                                        ><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company5.png')}}"  alt="img"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="blog.html" class="client-thumb"
                                        ><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company6.png')}}"  alt="img"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="blog.html" class="client-thumb"
                                        ><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company7.png')}}"  alt="img"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="blog.html" class="client-thumb"
                                        ><img style="width:87px; height:87px" src="{{asset('assets/img/gallery/Colleges/placement/company8.png')}}"  alt="img"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <section class="cta-area-3 space-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-30 mb-lg-0">
                        <div
                            class="cta-card"
                            data-bg-src="{{asset('assets/img/bg/cta-bg_3_1.png')}}"
                        >
                            <div class="title-area mb-40">
                                <span class="sub-title text-white"
                                    ><i class="fal fa-book me-2"></i>Popular
                                    Courses</span
                                >
                                <h4 class="sec-title text-white">
                                    Get The Best Courses &<br />Upgrade Your
                                    Skills
                                </h4>
                            </div>
                            <a href="#contact-sec" class="th-btn style8"
                                >Join With Us<i
                                    class="fas fa-arrow-right ms-2"
                                ></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="cta-card"
                            data-bg-src="{{asset('assets/img/bg/cta-bg_3_2.png')}}"
                        >
                            <div class="title-area mb-40">
                                <span class="sub-title text-white"
                                    ><i class="fal fa-book me-2"></i>Popular
                                    Courses</span
                                >
                                <h4 class="sec-title text-white">
                                    Engaging Courses for<br />Intellectual
                                    Exploration
                                </h4>
                            </div>
                            <a href="#contact-sec" class="th-btn style8"
                                >Join With Us<i
                                    class="fas fa-arrow-right ms-2"
                                ></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section
            class="testi-area-1 overflow-hidden space-bottom"
            data-bg-src="{{asset('assets/img/bg/testi_bg_1.png')}}"
        >
            <div
                class="shape-mockup testi-bg-shape1 jump"
                data-right="0"
                data-top="50%"
            >
                <img
                    src="{{asset('assets/img/testimonial/testi-bg-shape_1_1.png')}}"
                    alt="img"
                />
            </div>
            <div
                class="shape-mockup testi-bg-shape2 spin"
                data-left="0"
                data-top="15%"
            >
                <img
                    src="{{asset('assets/img/testimonial/testi-bg-shape_1_2.png')}}"
                    alt="img"
                />
            </div>
            <div class="container">
                <div class="title-area text-center mb-50">
                    <span class="sub-title"
                        ><i class="fal fa-book me-2"></i> Our Students
                        Testimonials</span
                    >
                    <h2 class="sec-title">
                        Students Say’s About Our College
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div
                            class="th-carousel testi-slider1 dot-style2 row"
                            id="testimonial-slider1"
                            data-slide-show="2"
                            data-ml-slide-show="2"
                            data-lg-slide-show="1"
                            data-md-slide-show="1"
                            data-dots="true"
                            data-arrows="false"
                        >
                            <div class="col-lg-6">
                                <div class="testi-box">
                                    <div class="testi-box-bg-shape">
                                        <svg
                                            width="150"
                                            height="137"
                                            viewBox="0 0 150 137"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z"
                                                fill="#0D5EF4"
                                            />
                                        </svg>
                                    </div>
                                    <div class="testi-box_content">
                                        <div class="testi-box_img">
                                            <img
                                                src=""
                                                alt="Avater"
                                            />
                                        </div>
                                        <p class="testi-box_text">

                                            “Four years at K. Ramakrishnan College of Engineering have been a whirlwind of labs, crackling circuits, exams, and the company of passionate peers. As an Electrical and Electronics Engineering student; I’ve probed into the world of power grids and microchips, pushing boundaries with every subject. But KRCE wasn’t just about academics. Furthermore, from presentation days to symposiums, I found out what I’m good at; also, made lifelong friendships, and learned the art of resourcefulness like a true engineer.”

                                        </p>
                                    </div>
                                    <div class="testi-box_bottom">
                                        <div>
                                            <h3 class="testi-box_name">
                                                Deebiga R
                                            </h3>
                                            <span class="testi-box_desig"
                                                >EEE Student</span
                                            >
                                        </div>
                                        <div class="testi-box_review">
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            (4.7)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testi-box">
                                    <div class="testi-box-bg-shape">
                                        <svg
                                            width="150"
                                            height="137"
                                            viewBox="0 0 150 137"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z"
                                                fill="#0D5EF4"
                                            />
                                        </svg>
                                    </div>
                                    <div class="testi-box_content">
                                        <div class="testi-box_img">
                                            <img
                                                src=""
                                                alt="Avater"
                                            />
                                        </div>
                                        <p class="testi-box_text">
                                            “Looking back on my time at K. Ramakrishnan College of Engineering (KRCE), I realize how much the place has influenced me. In fact, KRCE provided a space for personal and intellectual growth. In addition, the staff were our mentors and also friends, always there to help with academics or to offer advice. Looking ahead, I’m grateful for these valuable experiences; and, KRCE has also equipped me with life lessons like patience, self-reliance, and the strength to face challenges.”
                                        </p>
                                    </div>
                                    <div class="testi-box_bottom">
                                        <div>
                                            <h3 class="testi-box_name">
                                                Nivetha S 
                                            </h3>
                                            <span class="testi-box_desig"
                                                >Artificial Intelligence and Data Science</span
                                            >
                                        </div>
                                        <div class="testi-box_review">
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            (4.7)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testi-box">
                                    <div class="testi-box-bg-shape">
                                        <svg
                                            width="150"
                                            height="137"
                                            viewBox="0 0 150 137"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z"
                                                fill="#0D5EF4"
                                            />
                                        </svg>
                                    </div>
                                    <div class="testi-box_content">
                                        <div class="testi-box_img">
                                            <img
                                                src=""
                                                alt="Avater"
                                            />
                                        </div>
                                        <p class="testi-box_text">
                                            “The campus is more than just buildings, it’s a commitment to quality education with well-equipped labs for hands-on learning. The place stands out for its excellent facilities and an easy transport. What really makes my college special is its placement training programs, refining not just technical skills but also preparing us for the professional world. As I go through my B. Tech I.T. program, K Ramakrishnan College of Engineering remains a key driver for my learning and personal development.”
                                        </p>
                                    </div>
                                    <div class="testi-box_bottom">
                                        <div>
                                            <h3 class="testi-box_name">
                                                Nigan. S
                                            </h3>
                                            <span class="testi-box_desig"
                                                >IT Student</span
                                            >
                                        </div>
                                        <div class="testi-box_review">
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            <i
                                                class="fa-solid fa-star-sharp"
                                            ></i>
                                            (4.7)
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="overflow-hidden space" id="blog-sec">
            <div class="container">
                <div class="mb-35 text-center text-md-start">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-8">
                            <div class="title-area mb-md-0">
                                <span class="sub-title"
                                    ><i class="fal fa-book me-2"></i> Our News &
                                    Blogs</span
                                >
                                <h2 class="sec-title">Latests News & Blogs</h2>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <a href="blog.html" class="th-btn"
                                >View All Posts<i
                                    class="fa-solid fa-arrow-right ms-2"
                                ></i
                            ></a>
                        </div>
                    </div>
                </div>
                <div
                    class="row slider-shadow th-carousel blog-slider-1"
                    data-slide-show="3"
                    data-lg-slide-show="2"
                    data-md-slide-show="2"
                    data-sm-slide-show="1"
                    data-arrows="true"
                >
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="blog-details.html"
                                    ><img
                                        src="{{asset('assets/img/blog/blog-1-1.jpg')}}"
                                        alt="Blog Image"
                                /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"
                                        ><i class="fa-light fa-user"></i>by
                                        David Smith</a
                                    >
                                    <a href="blog.html"
                                        ><i class="fa-light fa-clock"></i>05
                                        Jun, 2023</a
                                    >
                                </div>
                                <h4 class="box-title">
                                    <a href="blog-details.html"
                                        >Educate, Empower, Excel: Discover the
                                        Power of Learning!</a
                                    >
                                </h4>
                                <a href="blog-details.html" class="link-btn"
                                    >Read More Details<i
                                        class="fas fa-arrow-right ms-2"
                                    ></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="blog-details.html"
                                    ><img
                                        src="{{asset('assets/img/blog/blog-1-2.jpg')}}"
                                        alt="Blog Image"
                                /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"
                                        ><i class="fa-light fa-user"></i>by
                                        David Smith</a
                                    >
                                    <a href="blog.html"
                                        ><i class="fa-light fa-clock"></i>03
                                        Jun, 2023</a
                                    >
                                </div>
                                <h4 class="box-title">
                                    <a href="blog-details.html"
                                        >Enrich Your Mind, Envision Your Future:
                                        Education for Success</a
                                    >
                                </h4>
                                <a href="blog-details.html" class="link-btn"
                                    >Read More Details<i
                                        class="fas fa-arrow-right ms-2"
                                    ></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="blog-details.html"
                                    ><img
                                        src="{{asset('assets/img/blog/blog-1-3.jpg')}}"
                                        alt="Blog Image"
                                /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"
                                        ><i class="fa-light fa-user"></i>by
                                        David Smith</a
                                    >
                                    <a href="blog.html"
                                        ><i class="fa-light fa-clock"></i>10
                                        Jul, 2023</a
                                    >
                                </div>
                                <h4 class="box-title">
                                    <a href="blog-details.html"
                                        >University class starting soon while
                                        the lovely valley team work</a
                                    >
                                </h4>
                                <a href="blog-details.html" class="link-btn"
                                    >Read More Details<i
                                        class="fas fa-arrow-right ms-2"
                                    ></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="blog-details.html"
                                    ><img
                                        src="{{asset('assets/img/blog/blog-1-1.jpg')}}"
                                        alt="Blog Image"
                                /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"
                                        ><i class="fa-light fa-user"></i>by
                                        David Smith</a
                                    >
                                    <a href="blog.html"
                                        ><i class="fa-light fa-clock"></i>02
                                        Apr, 2023</a
                                    >
                                </div>
                                <h4 class="box-title">
                                    <a href="blog-details.html"
                                        >Educate, Empower, Excel: Discover the
                                        Power of Learning!</a
                                    >
                                </h4>
                                <a href="blog-details.html" class="link-btn"
                                    >Read More Details<i
                                        class="fas fa-arrow-right ms-2"
                                    ></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="blog-details.html"
                                    ><img
                                        src="{{asset('assets/img/blog/blog-1-2.jpg')}}"
                                        alt="Blog Image"
                                /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"
                                        ><i class="fa-light fa-user"></i>by
                                        David Smith</a
                                    >
                                    <a href="blog.html"
                                        ><i class="fa-light fa-clock"></i>03
                                        Jun, 2023</a
                                    >
                                </div>
                                <h4 class="box-title">
                                    <a href="blog-details.html"
                                        >Enrich Your Mind, Envision Your Future:
                                        Education for Success</a
                                    >
                                </h4>
                                <a href="blog-details.html" class="link-btn"
                                    >Read More Details<i
                                        class="fas fa-arrow-right ms-2"
                                    ></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="blog-details.html"
                                    ><img
                                        src="{{asset('assets/img/blog/blog-1-3.jpg')}}"
                                        alt="Blog Image"
                                /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"
                                        ><i class="fa-light fa-user"></i>by
                                        David Smith</a
                                    >
                                    <a href="blog.html"
                                        ><i class="fa-light fa-clock"></i>10
                                        Jul, 2023</a
                                    >
                                </div>
                                <h4 class="box-title">
                                    <a href="blog-details.html"
                                        >University class starting soon while
                                        the lovely valley team work</a
                                    >
                                </h4>
                                <a href="blog-details.html" class="link-btn"
                                    >Read More Details<i
                                        class="fas fa-arrow-right ms-2"
                                    ></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        
        <div class="space-bottom" id="contact-sec">
            <div class="container">
                <div class="map-sec">
                    <div class="map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.4529810042322!2d78.73501647504409!3d10.929114689229067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf7316aaaaaab%3A0xb794422e551a89ad!2sK%20Ramakrishnan%20College%20of%20Engineering%20(KRCE)!5e0!3m2!1sen!2sin!4v1739421016871!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 mb-30 mb-xl-0">
                        <div class="me-xxl-5 mt-60">
                            <div class="title-area mb-25">
                                <h2 class="border-title h3">
                                    Have Any Questions?
                                </h2>
                            </div>
                            <p class="mt-n2 mb-25">
                                Have a inquiry or some feedback for us? Fill out
                                the form<br />below to contact our team.
                            </p>
                            <div class="contact-feature">
                                <div class="contact-feature-icon">
                                    <i class="fal fa-location-dot"></i>
                                </div>
                                <div class="media-body">
                                    <p class="contact-feature_label">
                                        Our Address
                                    </p>
                                    <a
                                        href="https://www.google.com/maps"
                                        class="contact-feature_link"
                                        >NH 45, Samayapuram, Tiruchirappalli,<br />TamilNadu 621112</a
                                    >
                                     
                                </div>
                            </div>
                            <div class="contact-feature">
                                <div class="contact-feature-icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p class="contact-feature_label">
                                        Phone Number
                                    </p>
                                    <a
                                        href="tel:+917373284777"
                                        class="contact-feature_link"
                                        >Mobile:<span
                                            > +91 73732 84777</span
                                        ></a
                                    >
                                    <a
                                        href="tel:+9104312670699"
                                        class="contact-feature_link"
                                        >Phone:
                                        <span>+91 0431 - 2670699</span></a
                                    >

                                </div>
                            </div>

                            <div class="contact-feature">
                                <div class="contact-feature-icon">
                                    <i class="fal fa-mail"></i>
                                </div>
                                <div class="media-body">
                                    <p class="contact-feature_label">
                                        E-mail
                                    </p>
                                    <a
                                        href="mailto:principal@krce.ac.in"
                                        class="contact-feature_link"
                                        >Principal:<span
                                            > principal@krce.ac.in</span
                                        ></a
                                    >
                                    <a
                                        href="mailto:placement@krgi.in"
                                        class="contact-feature_link"
                                        >Placement:
                                        <span>placement@krgi.in</span></a
                                    >

                                </div>
                            </div>
                            <div class="contact-feature">
                                <div class="contact-feature-icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="media-body">
                                    <p class="contact-feature_label">
                                        Hours of Operation
                                    </p>
                                    <span class="contact-feature_link"
                                        >Monday - Friday: 09:00 - 17:00</span
                                    >
                                    <span class="contact-feature_link"
                                        >Sunday & Saturday: Leave</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div
                            class="contact-form-wrap"
                            data-bg-src="{{asset('assets/img/bg/contact_bg_1.png')}}"
                        >
                            <span class="sub-title">Contact With Us!</span>
                            <h2 class="border-title">Get in Touch</h2>
                            <p class="mt-n1 mb-30 sec-text">
                                Lorem ipsum dolor sit amet adipiscing elit, sed
                                do eiusmod tempor eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                            <form id="contact_us_form" action="{{route('contact_us')}}" method ="POST" class="contact-form ajax-contact">
                               @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control style-white"
                                                name="name"
                                                id="name"
                                                placeholder="Your Name*"
                                            />
                                            <i class="fal fa-user"></i>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input
                                                type="email"
                                                class="form-control style-white"
                                                name="email"
                                                id="email"
                                                placeholder="Email Address*"
                                            />
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select
                                                name="subject"
                                                id="subject"
                                                class="single-select nice-select form-select style-white"
                                            >
                                                <option
                                                    value=""
                                                    disabled="disabled"
                                                    selected="selected"
                                                    hidden
                                                >
                                                    Select Subject*
                                                </option>
                                                <option value="Web Design">
                                                    Web Design
                                                </option>
                                                <option value="Web Development">
                                                    Web Development
                                                </option>
                                                <option
                                                    value="Engine Diagnostics"
                                                >
                                                    Engine Diagnostics
                                                </option>
                                                <option
                                                    value="Digital Marketing"
                                                >
                                                    Digital Marketing
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input
                                                type="tel"
                                                class="form-control style-white"
                                                name="number"
                                                id="number"
                                                placeholder="Phone Number*"
                                            />
                                            <i class="fal fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea
                                                name="message"
                                                id="message"
                                                cols="30"
                                                rows="3"
                                                class="form-control style-white"
                                                placeholder="Write Your Message*"
                                            ></textarea>
                                            <i class="fal fa-pen"></i>
                                        </div>
                                    </div>
                                    <div class="form-btn col-12 mt-10">
                                        <button type="submit" class="th-btn">Send Message<i class="fas fa-long-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       @include('layouts.footer')
       
        <div class="scroll-top">
            <svg
                class="progress-circle svg-content"
                width="100%"
                height="100%"
                viewBox="-1 -1 102 102"
            >
                <path
                    d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919, 307.919;
                        stroke-dashoffset: 307.919;
                    "
                ></path>
            </svg>
        </div>
    
        @include('layouts.script')
        <script>
            $(document).ready(function(){
               
                $('#contact_us_form').validate({

                        rules:{
                            name: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        message: {
                            required: true,
                            minlength: 10
                        }
                    },

                    messages:{
                        name: {
                        required: "Please enter your name",
                        minlength: "Name must be at least 3 characters"
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Enter a valid email (e.g., example@mail.com)"
                    },
                    message: {
                        required: "Please enter a message",
                        minlength: "Message must be at least 10 characters"
                    }

                    },
                    submitHandler: function (form) {
                        alert("Form submitted successfully!");
                        form.submit(); // You can replace this with an AJAX request if needed
                  }
                });
            });
              
        </script>
</body>
</html>