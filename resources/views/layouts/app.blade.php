<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jerick Baetiong | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b41c177c53.js" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}"> --}}
    <meta name="description" content="Jerick Baetiong, Fullstack Developer">


</head>

<body>
    <header class="border">
        <div class="logo">
            <!-- <img src="img/devjane.png" alt=""> -->
            <h3>&lt;Full-Stack-Jerick&gt;</h3>
            <!-- <h3>&lt;JERICK-DEV&gt;</h3> -->

        </div>
        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>

        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                <li class="nav__item"><a href="#services" class="nav__link">About me</a></li>
                <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>
    


    <!-- Footer -->
    <footer class="footer">
        <div>
            <i class="fas fa-envelope"></i>
            <a href="mailto:jerickbaetiong02@gmail.com" class="footer__link">jerickbaetiong02@gmail.com</a>
        </div>
        <div>
            <i class="fas fa-map-marker-alt"></i>
            <span class="">Metro Manila, Philippines</span>
        </div>
        <div>
            <i class="fas fa-phone"></i>
            <span class="">(+63) 9184372331</span>
        </div>

        <ul class="social-list">
            <!-- <li class="social-list__item"><a href="https://facebook.com/oneandonlyu" class="social-list__link">fb</a> -->
            </li>
            <li class="social-list__item"><a href="https://twitter.com/jerickmb" class="social-list__link"><i
                        class="fab fa-twitter"></i></a>
            </li>
            <li class="social-list__item"><a href="https://github.com/jerickbaetiong" class="social-list__link"><i
                        class="fab fa-github"></i></a></li>
            <li class="social-list__item"><a href="https://gitlab.com/jerickbaetiong03" class="social-list__link">
                    <i class="fab fa-gitlab"></i></a></li>
        </ul>
    </footer>


    <!-- <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>
    paypal.Buttons().render('body');
    </script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    const links = document.getElementsByClassName('nav__link')
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function() {
            let current = document.getElementsByClassName('active');
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active"
            document.body.classList.remove('nav-open');
        })
    }



    const navLinks = document.querySelectorAll('nav__link');

    const navToggle = document.querySelector('.nav-toggle')
    navToggle.addEventListener('click', () => {
        document.body.classList.toggle('nav-open');
    })

    AOS.init();
    </script>
</body>

</html>