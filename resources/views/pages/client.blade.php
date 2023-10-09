@foreach ($title as $t)
<h5 class="client-carousel__tilte"><span>{{ $t->title_client }}</span></h5>
@endforeach
<!-- section-title -->
<div class="client-carousel__one nisoz-owl__carousel owl-theme owl-carousel">

  @foreach($clients as $client)
   @if($client->image)
      <div class="client-carousel__one__item">
        @if($client->link)
        <a href="{{ $client->link }}"> <img src="{{ asset('assets/client/'.$client->image) }}" alt="{{ $client->alt_image }}"></a>
        @else
        <img src="{{ asset('assets/client/'.$client->image) }}" alt="{{ $client->alt_image }}">
     
        @endif
      </div><!-- /.owl-slide-item-->

    @elseif($client->name)
        <div class="client-carousel__one__item">
          <a href="{{ $client->link }}"><h2 class="client-carousel__one__item">{{ $client->name }}</h2></a>
        </div><!-- /.owl-slide-item-->
    @endif
  @endforeach
  </div>