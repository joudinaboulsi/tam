<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1.png);"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
        <a href="#home" class="main-footer__logo d-flex flex-row align-items-center">
                <img src="{{ asset('assets/logo/'.app('contact')->logo) }}" alt="{{ app('contact')->alt_logo }}" width="150">
                <h2 class="logo-title">{{ app('contact')->logo_title }}</h2>
            </a><!-- /.footer-logo -->
</div>
           

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="main-footer__about">
                    <ul class="main-footer__about__info">
                        <li><span class="fas fa-phone-square"></span><a href="tel:{{ app('contact')->tel1 }}">{{ app('contact')->phone1 }} </a></li>
                        <li><span class="fas fa-phone-square"></span><a href="tel:{{ app('contact')->tel1 }}">{{ app('contact')->phone2}}</a></li>
                        <li><span class="fas fa-envelope"></span><a href="mailto:{{ app('contact')->email1 }}">{{ app('contact')->email1 }}</a></li>
                        <li><span class="fas fa-envelope"></span><a href="mailto:{{ app('contact')->email2 }}">{{ app('contact')->email2 }}</a></li>
                    </ul>
                </div><!-- /.footer-about -->
            </div> 
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="main-footer__navmenu">
                    <ul>
                    <li class="scrollToLink"><a href="#about">About</a></li>   
                    <li class="scrollToLink"><a href="#services">Services</a></li>   
                    <li class="scrollToLink"><a href="#products">Products</a></li>
                    <li class="scrollToLink"><a href="#projects">Projects</a></li>
                    <li class="scrollToLink"><a href="#clients">Clients</a></li>
                    <li class="scrollToLink"><a href="#contact">Contact</a></li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-menu -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
            <p class="main-footer__about__text"> {{ app('contact')->location}}</p>
            <div class="main-footer__social">
            <a href="{{ app('contact')->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="{{ app('contact')->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
            </div><!-- /.footer-social -->
            </div>
           
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.main-footer -->

<section class="copyright text-center">
    <div class="container wow fadeInUp" data-wow-delay="500ms">
        <p class="copyright__text">© Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> by <a href="#">Tracking and Monitoring. </a>All rights reserved.</p>
    </div><!-- /.container -->
</section><!-- /.copyright -->