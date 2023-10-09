@foreach ($visions as $v)
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="100ms">
            <div class="fact-one__item text-center">
                <div class="fact-one__item__icon"><span class="icon-campaign"></span></div><!-- /.fact-one__icon -->
                <div class="fact-one__item__count">
                    <span class="count-box">
                        <span class="count-text" data-stop="{{ $v->count2 }}" data-speed="1500"></span>
                    </span>
                </div><!-- /.fact-one__count -->
                <h3 class="fact-one__item__title">{{$v->title2}}</h3><!-- /.fact-one__title -->
            </div><!-- /.fact-one__item -->
        </div><!-- /.col-lg-3 col-md-6 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="200ms">
            <div class="fact-one__item text-center">
                <div class="fact-one__item__icon"><span class="icon-recommend"></span></div><!-- /.fact-one__icon -->
                <div class="fact-one__item__count">
                    <span class="count-box">
                        <span class="count-text" data-stop="{{ $v->count3 }}" data-speed="1500"></span>
                    </span>
                </div><!-- /.fact-one__count -->
                <h3 class="fact-one__item__title">{{ $v->title3 }}</h3><!-- /.fact-one__title -->
            </div><!-- /.fact-one__item -->
        </div><!-- /.col-lg-3 col-md-6 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="300ms">
            <div class="fact-one__item text-center">
                <div class="fact-one__item__icon"><span class="icon-increment"></span></div><!-- /.fact-one__icon -->
                <div class="fact-one__item__count">
                    <span class="count-box">
                        <span class="count-text" data-stop="{{ $v->count4 }}" data-speed="1500"></span>
                    </span>
                </div><!-- /.fact-one__count -->
                <h3 class="fact-one__item__title">{{ $v->title4 }}</h3><!-- /.fact-one__title -->
            </div><!-- /.fact-one__item -->
        </div><!-- /.col-lg-3 col-md-6 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="400ms">
            <div class="fact-one__item text-center">
                <div class="fact-one__item__icon"><span class="icon-consulting"></span></div><!-- /.fact-one__icon -->
                <div class="fact-one__item__count">
                    <span class="count-box">
                        <span class="count-text" data-stop="{{ $v->count5 }}" data-speed="1500"></span>
                    </span>
                </div><!-- /.fact-one__count -->
                <h3 class="fact-one__item__title">{{ $v->title5 }}</h3><!-- /.fact-one__title -->
            </div><!-- /.fact-one__item -->
        </div><!-- /.col-lg-3 col-md-6 -->
    </div>
</div>
@endforeach