@foreach ($title as $v)

<div class="col-md-12">
    <div class="section-title text-center">
        <div class="section-title__triangle">
            <span class="section-title__triangle-left"></span>
            <span class="section-title__triangle-right"></span>
        </div>
        <h5 class="section-title__tagline">{{ $v->subtitle_project }}</h5>
        <h2 class="section-title__title">{{ $v->title_project }} </h2>
    </div><!-- section-title -->
</div>
@endforeach
</div>
<div class="portfolio-one__slider nisoz-owl__carousel owl-carousel">

    @foreach ($projects as $project)
        
    @if($project->image)
        <div class="item">
            <div class="portfolio-one__item">
                <div class="portfolio-one__thumb">
                    <img src="{{ asset('assets/project/'.$project->image) }}" alt="{{ $project->alt_image }}" />
                </div>
            </div>
        </div>
    @elseif($project->video)
        <div class="item">
            <div class="portfolio-one__item">
                <div class="portfolio-one__thumb">
                    <video controls width="100%" muted autoplay>
                        <source src="{{ asset('assets/project/'.$project->video) }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    @endif
   @endforeach
</div>