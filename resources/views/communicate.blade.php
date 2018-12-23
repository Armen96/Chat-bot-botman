@include('layouts.header')
<style>
    body {
        font-family: "Source Sans Pro", sans-serif;
        margin: 0;
        padding: 0;
    }

    .container-position {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .content {
        text-align: center;
    }

    .ChatInput{
        border: 1px solid lightgrey!important;
        height: auto!important;
    }
    .ChatAttachment+label{
        height: auto!important;
    }

    #app div{
        margin: auto;
        left: 0;
        right: 0;
        width: 445px;
    }

    .ChatLog{
        position: absolute;
        top: 60px !important;
        right: 0!important;
        left: 0!important;
        height: 400px;
        overflow-y: auto;
        width: 480px !important;
        max-width: 500px !important;
    }
    .content-top{
        margin-top: 100px!important;
    }
</style>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Botman</a>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="container container-position">
            <div class="content content-top col-md-12" id="app">
                <botman-tinker api-endpoint="/botman"></botman-tinker>
            </div>
        </div>
    </div>
</header>


<section class="projects-section bg-light">
    <div class="container">

        <div class="col-md-5">
            <h2>Question Answer List</h2>

            <ul class="list-group">
                <li class="list-group-item">Hi</li>
                <li class="list-group-item">Hello</li>
                <li class="list-group-item">Start conversation</li>
                <li class="list-group-item">Call me Tom</li>
                <li class="list-group-item">Facebook subscribe</li>
                <li class="list-group-item">Submit on "Attachment" button and choose file</li>
            </ul>

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

<script src="{{ secure_asset('/js/app.js') }}"></script>

{{--<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>--}}

</body>

</html>
