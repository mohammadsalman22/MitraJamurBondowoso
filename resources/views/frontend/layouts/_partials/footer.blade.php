<div class="container p-5">
    <div class="row">
        <div class="col-md-4 d-flex mx-auto">
            <img src="{{ asset('frontend/img/logo.png') }}" class="img-fluid w-50 d-inline-block align-self-center"
                alt="">
            <div class="align-self-center">
                <strong style="font-size: 20px;">Jamur <br> Tiram <br> Putih</strong>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex justify-content-center">
                <div class="p-2">
                    <a href="{{ $dashboard->instagram }}">
                        <img src="{{ asset('frontend/img/icon/instagram.svg') }}" alt="">
                    </a>
                </div>
                <div class="p-2">
                    <a href="mailto:{{ $dashboard->gmail }}">
                        <img src="{{ asset('frontend/img/icon/email.svg') }}" alt="">
                    </a>
                </div>
                <div class="p-2">
                    <a href="{{ $dashboard->facebook }}">
                        <img src="{{ asset('frontend/img/icon/facebook.svg') }}" alt="">
                    </a>
                </div>
                <div class="p-2">
                    <a href="https://wa.me/{{ $dashboard->whatsapp }}">
                        <img src="{{ asset('frontend/img/icon/whatsapp.svg') }}" alt="">
                    </a>
                </div>
                <div class="p-2">
                    <a href="{{ $dashboard->youtube }}">
                        <img src="{{ asset('frontend/img/icon/icon-youtube.svg') }}" alt="">
                    </a>
                </div>
                <div class="p-2">
                    <a href="{{ $dashboard->twitter }}">
                        <img src="{{ asset('frontend/img/icon/icon-twitter.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-end footer-sosmed">
            <div class="d-flex flex-column">
                <div class="mb-3">
                    <a href="tel:+{{ $dashboard->whatsapp }}">
                        <i class="fa-solid fa-phone"></i> <span
                            class="px-2">+{{ $dashboard->whatsapp }}</span>
                    </a>
                </div>
                <div class="mb-3">
                    <a href="mailto:{{ $dashboard->gmail }}">
                        <i class="fa-solid fa-envelope"></i> <span
                            class="px-2">{{ $dashboard->gmail }}</span>
                    </a>
                </div>
                <div class="mb-3">
                    <a href="https://goo.gl/maps/DwHwTDkdvjTWxAHa9">
                        <i class="fa-solid fa-location-dot"></i> <span class="px-2">Bondowoso</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <p>2022 Jambo - All Rights Reserved</p>
    </div>
</div>
