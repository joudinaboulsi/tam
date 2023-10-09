<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webneoo">
    {!! SEO::generate() !!}
    <link rel="icon" href="/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" href="/favicon/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/favicon/android-chrome-192x192.png" sizes="192x192" type="image/png">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/css/jquery-ui.css" />
    <link rel="stylesheet" href="/css/animate.min.css" />
    <link rel="stylesheet" href="/css/all.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/jarallax.css" />
    <link rel="stylesheet" href="/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/css/owl.theme.default.min.css" />

    <!-- style -->
    <link rel="stylesheet" href="/css/main.css" />


</head>

<body class="custom-cursor">
    <a href="https://wa.me/{{ app('contact')->whatsap_link }}" target="_blank" class="whatsapp-link-btn"><i class="fab fa-whatsapp"></i></a>

    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    @if (Session::has('msg'))
    <div class="popup modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close close-btn-contact" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row p-4">
                        <p class="text-3 mb-0">{{ session('msg') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="modal fade" id="modal1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-bg">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Your Interest</h4>
                    <button type="button" class="close close-btn-contact" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                <form method="POST" id="interest-form" action="{{ route('interest_path') }}" accept-charset="utf-8">
                            @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="contact-one__input-box">
                                    <input type="text" name="name" placeholder="Your name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="contact-one__input-box">
                                    <input type="text" name="phone" placeholder="Your phone" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-one__input-box">
                                    <input type="email" name="email" placeholder="Email address" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-one__input-box">
                                    <select class="selectpicker" name="interest" required>
                                        <option selected disabled>Services interest</option>
                                        <option value="IOT & TELEMATICS Solutions">IOT & TELEMATICS Solutions</option>
                                        <option value="MOBILITY & AUTOMATION Solutions">MOBILITY & AUTOMATION Solutions</option>
                                        <option value="DIGITAL Solutions">DIGITAL Solutions</option>
                                        <option value="SOFTWARE Solutions">SOFTWARE Solutions</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-one__input-box">
                                    <textarea name="message" rows="4" placeholder="Your message" required></textarea>
                                </div>
                            </div>
                            <div class="contact-one__btn-box">
                                <button type="submit" class="nisoz-btn">
                                    <span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span><span class="nisoz-btn__shape"></span>
                                    <span class="nisoz-btn__text">Send</span>
                                </button>
                            </div>
                        </div>
                        <!-- Add more form fields as needed using the same row and col-6 structure -->
                    </form>
                </div>



            </div>
        </div>
    </div>

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    @include('layouts.header')
    <div class="page-wrapper">
        @yield('content')
    </div>
    @include('layouts.footer')


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('js/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $("#contact-form").validate();
        $("#interest-form").validate();
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>