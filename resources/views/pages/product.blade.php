    
    @foreach($title as $t)
    <h5 class="client-carousel__tilte"><span>{{ $t->title_product }}</span></h5> 

    @endforeach
        <!-- section-title -->
        <div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel">

            @foreach ($product as $p)
            <div class="client-carousel__one__item">
                <img src="{{ ('assets/product/'.$p->image) }}" alt="{{ $p->alt_image }}">
            </div>
            @endforeach
          <!-- /.owl-slide-item-->
          
        </div>