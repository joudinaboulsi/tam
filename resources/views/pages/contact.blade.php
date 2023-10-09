<div class="row">
    @foreach($contact as $c)
    <div class="col-lg-6">
        <div class="nisoz-stretch-element-inside-column">
            <div class="contact-one__stretch-shape">
                <img src="assets/images/shapes/contact-2.png" alt="contact shape">
            </div>
            <div class="wow slideInLeft" data-wow-delay="100ms">
                <div class="contact-one__stretch-image">
                    <img src="{{ asset('assets/contact/'.$c->image) }}" alt="{{ $c->alt_image }}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
        <div class="contact-one__right">
            <div class="section-title">
                <div class="section-title__triangle">
                    <span class="section-title__triangle-left"></span>
                    <span class="section-title__triangle-right"></span>
                </div>
                <h5 class="section-title__tagline">{{ $c->subtitle_contact }}</h5>
                <h2 class="section-title__title">{{ $c->title_contact }}</h2>
            </div><!-- section-title -->
            <div class="contact-one__form-box">
                <form method="POST" id="contact-form" action="{{ route('contact_path') }}" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-one__input-box">
                                <input type="text" placeholder="Your name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-one__input-box">
                                <input type="email" placeholder="Email address" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-one__input-box">
                                <input type="text" placeholder="Phone" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-one__input-box text-message-box">
                                <textarea name="message" placeholder="Write Comment" required></textarea>
                            </div>
                            <div class="contact-one__btn-box">
                                <button type="submit" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Send a message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </div>  
@endforeach
</div>