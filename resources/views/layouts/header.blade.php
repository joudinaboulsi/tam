<section class="topbar">
    <div class="container-fluid">
        <div class="topbar__wrapper">
            <ul class="list-unstyled topbar__list">
                <li>
                    <span class="fas fa-envelope"></span>
                    <a href="mailto:{{ app('contact')->email1 }}">{{ app('contact')->email1 }}</a>
                </li>
                <li>
                    <span class="fas fa-map-marker"></span>
                    {{ app('contact')->location }}
                </li>
            </ul><!-- /.icon-box -->
            <ul class="list-unstyled topbar__menu">
                <li class="scrollToLink"><a href="#{{ app('contact')->scrollToLink }}">{{ app('contact')->scrollToLinkText }}</a></li>
            </ul><!-- /.list-menu -->
            <div class="topbar__social">
                <a href="{{ app('contact')->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="{{ app('contact')->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
            </div><!-- /.social-links -->
        </div>
    </div>
</section><!-- /.topbar-header -->
<header class="main-header">
    <nav class="main-menu">
        <div class="container-fluid">
            <div class="main-menu__logo">
                <a href="#" class="d-flex flex-row align-items-center">
                    <img src="{{ asset('assets/logo/'.app('contact')->logo) }}" width="100" alt="{{ app('contact')->alt_logo }}">
                    <h2 class="logo-title-header">{{ app('contact')->logo_title }}</h2>
                </a>
            </div><!-- /.main-menu__logo -->
            <div class="main-menu__nav">
                <ul class="main-menu__list one-page-scroll-menu">
                    <li class="scrollToLink current">
                        <a href="#home">Home</a>
                    </li>
                    <li class="dropdown scrollToLink">
                        <a href="#about">About</a>
                        <ul>

                            <li class="scrollToLink "><a href="#mission">Mission</a></li>
                            <li class="scrollToLink"><a href="#vision">Vision</a></li>

                        </ul>
                    </li>
                    <li class="scrollToLink"><a href="#services">Services</a></li>   
                    <li class="scrollToLink"><a href="#products">Products</a></li>
                    <li class="scrollToLink"><a href="#projects">Projects</a></li>
                    <li class="scrollToLink"><a href="#clients">Clients</a></li>
                    <li class="scrollToLink"><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.main-menu__nav -->
            <div class="main-menu__right">
                <a href="#" class="main-menu__toggler mobile-nav__toggler">
                    <i class="fa fa-bars"></i>
                </a><!-- /.mobile menu btn -->
                <a href="tel:{{ app('contact')->tel1 }}" class="main-menu__phone">
                    <i class="icon-telephone"></i>
                    {{ app('contact')->phone1 }}
                </a><!-- /.phone-number -->
            </div><!-- /.main-menu__right -->
        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header><!-- /.main-header -->

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="#" class="d-flex flex-row align-items-center" aria-label="logo image">  <img src="{{ asset('assets/logo/'.app('contact')->logo) }}" width="100" alt="{{ app('contact')->alt_logo }}"> <h2 class="logo-title-header">{{ app('contact')->logo_title }}</h2></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:{{ app('contact')->email1 }}">{{ app('contact')->email1 }}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{ app('contact')->tel1 }}">{{ app('contact')->phone1 }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            {{-- <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> --}}
            <a href="{{ app('contact')->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="{{ app('contact')->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->