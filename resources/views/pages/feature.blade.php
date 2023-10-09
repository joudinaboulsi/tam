<section class="feature-one">
    @foreach($missions as $mission)
        <div class="container">
            <div class="feature-one__wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__item">
                            <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                            <h3 class="feature-one__item__title">{{ $mission->title1 }}</h3>
                            <p class="feature-one__item__text">
                              {!!$mission->p1 !!}</p>
                        </div><!-- /.feature-box -->
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-one__item">
                            <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                            <h3 class="feature-one__item__title">{{ $mission->title2 }}</h3>
                            <p class="feature-one__item__text">
                                {!!$mission->p2 !!}</p>
                        </div><!-- /.feature-box -->
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="feature-one__item">
                            <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                            <h3 class="feature-one__item__title">{{ $mission->title3 }}</h3>
                            <p class="feature-one__item__text">
                                {!!$mission->p3 !!}</p>
                        </div><!-- /.feature-box -->
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="feature-one__item">
                            <div class="feature-one__item__icon"><span class="icon-tick"></span></div>
                            <h3 class="feature-one__item__title">{{ $mission->title4 }}</h3>
                            <p class="feature-one__item__text">
                                {!!$mission->p4 !!}</p>
                        </div><!-- /.feature-box -->
                    </div>
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                        <a data-bs-toggle="modal" data-bs-target="#modal1" class="nisoz-btn d-flex justify-content-center" width="100%">
                            <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                            <span class="nisoz-btn__text">{{ $mission->btn }}</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</section>