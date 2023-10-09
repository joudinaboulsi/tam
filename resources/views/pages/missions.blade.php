<div class="container">
    @foreach($missions as $mission)
    <div class="row">
      
        <div class="col-md-8 col-xl-8 wow fadeInLeft" data-wow-delay="200ms">
            <div class="section-title">
                <h2 class="section-title__title">{{ $mission->title_mission }}</h2>
            </div><!-- section-title -->
        </div>
        <div class="col-md-4 col-xl-4 text-end wow fadeInRight" data-wow-delay="300ms">
            <a href="#vision" class="nisoz-btn">
                <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                <span class="nisoz-btn__text">{{ $mission->scrollTo }}</span>
            </a><!-- /.btn -->
        </div>
    </div>
    <div class="cta-one__text wow fadeInUp" data-wow-delay="400ms">
        <div class="section-title__triangle">
            <span class="section-title__triangle-left"></span>
            <span class="section-title__triangle-right"></span>
        </div>
        <p>{!!$mission->content_mission  !!}</p>
    </div>
    @endforeach
</div>