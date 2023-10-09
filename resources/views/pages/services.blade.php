@foreach ($services as $service)
<div class="row wow fadeInUp" data-wow-delay="100ms">
    <div class="col-md-7">
        <div class="section-title">
            <div class="section-title__triangle">
                <span class="section-title__triangle-left"></span>
                <span class="section-title__triangle-right"></span>
            </div>
            <h5 class="section-title__tagline">{{ $service->subtitle_service }}</h5>
            <h2 class="section-title__title">{{ $service->title_service }}</h2>
        </div><!-- section-title -->
    </div>
    <div class="col-md-5">
        <p class="service-three__text">
           {!! strip_tags($service->content_service) !!}
        </p>
    </div>
</div>
<div class="row service-three__cus-row">
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="200ms">
        <div class="gallery-page__single text-center">
            <div class="service-three__item__icon">
                <img src="{{ asset('assets/service/'.$service->icon1) }}" alt="{{ $service->alt_icon1 }}">
            </div>
            <h3 class="service-three__item__title" style="width:150px">
                <a>{{ $service->subtitle1 }}</a>
            </h3><!-- /.service-title --><!-- /.service-icon -->
            <div class="gallery-page__icon">
                <a class="img-popup" href="{{ asset('assets/service/'.$service->image1) }}" alt="{{ $service->alt_image1 }}" data-title="{{ $service->subtitle1 }}"><span class="icon-plus"></span></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="300ms">
        <div class="gallery-page__single text-center">
            <div class="service-three__item__icon">
                <img src="{{ asset('assets/service/'.$service->icon2) }}" alt="{{ $service->alt_icon2 }}">
            </div>
            <h3 class="service-three__item__title" style="width:150px">
                <a>{{ $service->subtitle2 }}</a>
            </h3><!-- /.service-title --><!-- /.service-icon -->
            <div class="gallery-page__icon">
                <a class="img-popup" href="{{ asset('assets/service/'.$service->image2) }}" alt="{{ $service->alt_image2 }}" data-title="{{ $service->subtitle2 }}"><span class="icon-plus"></span></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="450ms">
        <div class="gallery-page__single text-center">
            <div class="service-three__item__icon">
                <img src="{{ asset('assets/service/'.$service->icon3) }}" alt="{{ $service->alt_icon3 }}">
            </div>
            <h3 class="service-three__item__title" style="width:100px">
               <a>{{ $service->subtitle3 }}</a>
            </h3><!-- /.service-title --><!-- /.service-icon -->
            <div class="gallery-page__icon">
                <a class="img-popup" href="{{ asset('assets/service/'.$service->image3) }}" alt="{{ $service->alt_image3 }}" data-title="{{ $service->subtitle3 }}"><span class="icon-plus"></span></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="450ms">
        <div class="gallery-page__single text-center">
            <div class="service-three__item__icon">
                <img src="{{ asset('assets/service/'.$service->icon4) }}" alt="{{ $service->alt_icon4 }}">
            </div>
            <h3 class="service-three__item__title" style="width:100px">
                <a>{{ $service->subtitle4 }}</a>
            </h3><!-- /.service-title --><!-- /.service-icon -->
            <div class="gallery-page__icon">
                <a class="img-popup" href="{{ asset('assets/service/'.$service->image4) }}" alt="{{ $service->alt_image4 }}" data-title="{{ $service->subtitle4 }}"><span class="icon-plus"></span></a>
            </div>
        </div>
    </div>
</div>
@endforeach