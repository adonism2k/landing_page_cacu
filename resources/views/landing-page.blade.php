<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <title>Catatcuan</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container py-3 justify-content-center justify-content-lg-start">
                <a class="navbar-brand text-center text-lg-left m-0" href="{{ route('home.index') }}">Catatcuan</a>
            </div>
        </nav>
        <!-- end Navbar -->

        <!-- Join Us -->
        <section id="join-us">
            <div class="container h-100">
                <div class="row h-100 justify-content-center justify-content-lg-start">
                    <div class="col-12 col-lg-6 content_wrapper d-flex flex-column justify-content-center px-5 text-center text-lg-start">
                        <h1 class="title fw-bold ">Connecting All Your Payment Needs</h1>
                        <p class="desc mt-2 mt-lg-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper sed turpis proin dolor in arcu diam. Cras et dui tempus etiam pharetra elementum.</p>
                        <a href="#contact" class="btn btn-primary btn-lg w-100 mt-2 mt-lg-5 rounded-pill text-capitalize">join us!</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-inline">
                        <div class="back"></div>
                    </div>
                </div>
            </div>
            <div class="back_wrapper d-flex flex-column align-items-center d-lg-none">
                <div class="back"></div>
                <img src="{{ asset('storage/Assets-PNG/phone.png') }}" alt="Banner Image" class="image-phone d-inline d-lg-none" style="z-index: -1;">
            </div>
            <img src="{{ asset('storage/Assets-PNG/tangan.png') }}" alt="Banner Image" class="image-tangan d-none d-lg-inline">
        </section>
        <!-- Join Us -->

        <!-- How It Works -->
        <section id="how-it-works">
            <div class="container h-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title text-center mt-5">How it works</h1>
                    </div>
                </div>
                <div class="row mt-5 align-items-center">
                    <x-card number="1" color="#F2B359">
                        <x-slot name="title">Start your Bussiness</x-slot>
                        <x-slot name="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur tellus amet eu tincidunt vitae eget netus.</x-slot>
                    </x-card>
                    <x-card number="2" color="#88CFD7" class="card-middle">
                        <x-slot name="title">Try Catatcuan for Free!</x-slot>
                        <x-slot name="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur tellus amet eu tincidunt vitae eget netus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, error.</x-slot>
                    </x-card>
                    <x-card number="3" color="#FF7F71">
                        <x-slot name="title">Growth your Bussiness</x-slot>
                        <x-slot name="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur tellus amet eu tincidunt vitae eget netus.</x-slot>
                    </x-card>
                </div>
            </div>
        </section>
        <!-- end How It Works -->

        <!-- Third Section -->
        <section id="third" class="position-relative">
            <div class="back"></div>
            <div class="container h-100">
                <div class="row h-100 flex-column flex-lg-row">
                    <div class="col d-flex align-items-center justify-content-center justify-content-lg-start position-relative">
                        <img src="{{ asset('storage/Assets-PNG/phone.png') }}" alt="Phone & Chart" class="phone">
                        <img src="{{ asset('storage/Assets-PNG/chart-detail.png') }}" alt="Phone & Chart" class="chart-detail">
                    </div>
                    <div class="col d-flex flex-column justify-content-start justify-content-lg-center pl-lg-200 text-center text-lg-start">
                        <h3 class="gogogo mb-4">Gogogo</h3>
                        <h1 class="title">Connecting All Your Payment Needs</h1>
                        <p class="desc mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper sed turpis proin dolor in arcu diam. Cras et dui tempus etiam pharetra elementum.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Third Section -->

        <!-- Fourth Section -->
        <section id="fourth" class="position-relative">
            <div class="container h-100">
                <div class="row h-100 flex-column flex-lg-row-reverse">
                    <div class="col d-flex align-items-center justify-content-center justify-content-lg-end position-relative">
                        <img src="{{ asset('storage/Assets-PNG/phone.png') }}" alt="Phone & Chart" class="phone">
                        <img src="{{ asset('storage/Assets-PNG/chart-detail.png') }}" alt="Phone & Chart" class="chart-detail">
                    </div>
                    <div class="col d-flex flex-column justify-content-start justify-content-lg-center pr-lg-200 text-center text-lg-start">
                        <h3 class="gogogo mb-4">Gogogo</h3>
                        <h1 class="title">Connecting All Your Payment Needs</h1>
                        <p class="desc mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper sed turpis proin dolor in arcu diam. Cras et dui tempus etiam pharetra elementum.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Fourth Section -->

        <!-- Fifth Section -->
        <section id="fifth" style="background-image: url({{ asset('storage/Assets-PNG/coffeepict.png') }});">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center text-center text-lg-start">
                        <div class="subtitle">catatcuan</div>
                        <div class="title">Perfect for various type of business</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Fifth Section -->

        <!-- Sixth Section -->
        <section id="suitable">
            <div class="container h-100">
                <div class="row h-100 justify-content-end">
                    <div class="col-12 col-lg-6 position-relative top-0 d-flex align-items-center justify-content-center justify-content-lg-start">
                        <img src="{{ asset('storage/Assets-PNG/tablet.png') }}" alt="Tablet Image" class="tablet position-relative">
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-start align-items-lg-center">
                        <h1 class="title text-center text-lg-start">Suitable for various type of business</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Sixth Section -->

        <!-- contact -->
        <section id="contact" style="background-image: url({{ asset('storage/Assets-PNG/contactus.png') }});">
            <div class="container h-100">
                <div class="row h-100 justify-content-end">
                    <div class="col12 col-md-6 d-flex flex-column justify-content-center">
                        <div class="title mb-5 text-center text-lg-start">Hi! We’d Like to Hear From You</div>
                        <form method="POST" action="{{ route('home.send-email') }}" class="form d-flex flex-column justify-content-center">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" id="name" class="form-control @error('name') border border-2 border-danger @enderror" placeholder="Name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger fs-6 fst-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" id="email" class="form-control @error('email') border border-2 border-danger @enderror" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger fs-6 fst-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control @error('message') border border-2 border-danger @enderror" placeholder="Message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-danger fs-6 fst-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Contact -->

        <!-- Footer -->
        <footer>
            <div class="container py-5">
                <div class="row nav pt-5 justify-content-between">
                    <div class="col-12 col-md-6">
                        <h2 class="brand text-white text-center text-md-start">Catatcuan</h2>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col">
                                <h6 class="mb-4 head">Follow us on</h6>
                                <nav class="d-flex flex-column justify-content-center">
                                    <a href="#" class="link">Instagram</a>
                                    <a href="#" class="link">Facebook</a>
                                    <a href="#" class="link">Twitter</a>
                                </nav>
                            </div>
                            <div class="col">
                                <h6 class="mb-4 head">Get in touch</h6>
                                <nav class="d-flex flex-column justify-content-center">
                                    <a href="mailto:info@catatcuan.com" class="link">info@catatcuan.com</a>
                                    <a href="tel:+6282219725523" class="link">082219725523</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-between">
                    <hr class="text-white">
                    <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                        <span style="color: var(--secondary-color);">Powered by Catatcuan - {{ now()->year }}</span>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
                        <img src="{{ asset('storage/Assets-PNG/googleplay.png') }}" alt="Google Play button" class="app">
                        <img src="{{ asset('storage/Assets-PNG/appstore.png') }}" alt="App Store button" class="app">
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Contact Modal -->
        @if(session('success'))
            <div class="modal fade border-0" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog border-0">
                    <div class="modal-content border-0">
                        <div class="modal-header border-0">
                            <h5 class="modal-title" id="contactModalLabel">{{ session('success') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- End Contact Modal -->

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Custom -->
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>



