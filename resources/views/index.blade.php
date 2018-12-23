@include('layouts.header')

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Botman</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#service">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Botman</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Meet your automated legal receptionist.</h2>
            <a href="{{ url('/botman/tinker') }}" class="btn btn-primary js-scroll-trigger">Get Started</a>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Built with Laravel</h2>
                <p class="text-white-50">Put a legal chatbot to work on your law firm's website that can answer questions about your firm, takes enquiries, and books in meetings for you - helping convert more website visitors into clients 24/7.</p>
            </div>
        </div>
        <img src="{{ secure_asset('template/img/ai.jpg') }}" class="img-fluid" alt="">
    </div>
</section>

<!-- Projects Section -->
<section id="service" class="projects-section bg-light">
    <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" src="{{ secure_asset('template/img/question.jpeg') }}" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Ask the right questions.</h4>
                    <p class="text-black-50 mb-0">Save time by asking the right questions through an interactive conversation with your website visitor. Fine tune your legal chatbot for your areas of law. Plus answer frequently asked questions about your firm automatically from your own knowledge base.</p>
                </div>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ secure_asset('template/img/email2.png') }}" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">E-mail</h4>
                            <p class="mb-0 text-white-50">At the end of the conversation your legal chatbot automatically generates and sends personalised emails using the information it captures in the conversation to you and your website visitor, including calendar invitations for any meetings booked in.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Signup Section -->
<section id="signup" class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h3 class="text-white mb-5">Work smarter, save time and money
                    using chatbot automation.</h3>

            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">Grigor Zograp Street, Yerevan Armenia</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a>barsegyan96armen@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">+374 98512371</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a target="_blank" href="https://www.linkedin.com/in/armen-barsegyan-357336147/" class="mx-2">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a target="_blank" href="https://www.facebook.com/armen.barseghyan.58?ref=bookmarks" class="mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a target="_blank" href="https://github.com/Armen96" class="mx-2">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; Your Website 2018
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ secure_asset('template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ secure_asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ secure_asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ secure_asset('template/js/grayscale.min.js') }}"></script>

<script src="{{ secure_asset('template/js/grayscale.min.js') }}"></script>

</body>

</html>
