@foreach ($about as $b)
<div class="col-xl-6">
    <div class="about-one__thumb"><!-- about thumb start -->
        <div class="about-one__thumb__one wow fadeInLeft" data-wow-delay="100ms">
            <img src="{{ asset('assets/about/'.$b->image) }}" alt="{{ $b->alt_image }}">
        </div>
        <div class="about-one__thumb__two nisoz-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 10, "speed": 700, "scale": 1 }'>
            <img src="{{ asset('assets/about/'.$b->image1) }}" alt="about {{ $b->alt_image1 }}">
        </div>
    </div><!-- about thumb end -->
</div>
<div class="col-xl-6">
    <div class="about-one__content"><!-- about content start-->
        <div class="section-title">
            <div class="section-title__triangle">
                <span class="section-title__triangle-left"></span>
                <span class="section-title__triangle-right"></span>
            </div>
            <h5 class="section-title__tagline">{{ $b->subtitle_about }}</h5>
            <h2 class="section-title__title">{{ $b->title_about }}</h2>
        </div><!-- section-title -->
        <p class="about-one__content__text">
           {!!  strip_tags($b->content_about) !!}
        </p>
        @if( $b->btn_text)
        <!-- /.skills-item -->
        <a href="{{ asset('assets/about/'.$b->pdf) }}" class="nisoz-btn" download>
            <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
            <span class="nisoz-btn__text">{{ $b->btn_text }}</span>
        </a><!-- /.btn -->
        @endif
    </div><!-- about content end-->
</div>
@endforeach