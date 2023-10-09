@foreach ($visions as  $v)
    
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="choose-one__content wow fadeInUp" data-wow-delay="500ms">
                <div class="section-title">
                    <div class="section-title__triangle">
                        <span class="section-title__triangle-left"></span>
                        <span class="section-title__triangle-right"></span>
                    </div>
                    <h5 class="section-title__tagline">{{ $v->subtitle_vision }}</h5>
                    <h2 class="section-title__title">{{  $v->title_vision  }}</h2>
                </div><!-- section-title -->
                <p class="choose-one__content__text">
                    {!! strip_tags($v->content_vision) !!}
                </p>
            </div>
            <div class="choose-one__fact">
                <div class="choose-one__fact__icon"><span class="icon-project-management"></span></div><!-- /.choose-fact__icon -->
                <div class="choose-one__fact__count">
                    <span class="count-box">
                        <span class="count-text" data-stop="{{$v->count1}}" data-speed="1500"></span>
                    </span>+
                </div><!-- /.choose-fact__count -->
                <h3 class="choose-one__fact__title">{{ $v->title1 }}</h3><!-- /.choose-fact__title -->
            </div><!-- /.choose-fact -->
        </div>
        <div class="col-lg-7">
            <div class="nisoz-stretch-element-inside-column">
                <div class="nisoz-stretch__image wow slideInRight" data-wow-delay="400ms">
                    <img src="assets/images/resources/choose-1.jpg" alt="ogency">
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach