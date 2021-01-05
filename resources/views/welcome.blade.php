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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="description" content="Jerick Baetiong, Fullstack Developer">
</head>

<body>
    <header>
        <div class="logo">
            <!-- <img src="img/devjane.png" alt=""> -->
            <h3>&lt;JERICK-DEV&gt;</h3>
        </div>
        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>

        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#services" class="nav__link">About me</a></li>
                <li class="nav__item"><a href="#" class="nav__link">My Work</a></li>
            </ul>
        </nav>
    </header>


    <!-- Introduction -->

    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
            <p>Hi, I'm </p>
            <strong>Jerick Baetiong</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">Full Stack Developer from Caloocan City</p>
    </section>

    <!-- End Introduction -->

    <!-- My Services -->
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services">What I do</h2>
        <div class="services">
            <div class="service">
                <h3>UI/UX Design</h3>
                <p>Design websites and web applications that is usable, easy to use while having a clean and presentable
                    design.</p>
            </div><!-- / service -->

            <div class="service">
                <h3>Develop</h3>
                <p>Develop web application using the latest web technologies and writing clean and maintainable code.
                </p>
            </div><!-- / service -->

            <div class="service">
                <h3>Deploy</h3>
                <p>Deploy websites and web application and make it available to everyone using the latest deployment
                    technologies.</p>
            </div><!-- / service -->

        </div><!-- / Services -->

        <a href="#work" class="btn">My Work</a>
    </section>


    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Full stack developer based out of Caloocan City
            Philippines</p>

        <div class="about-me__body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus fugiat eos praesentium cumque
                laudantium! Molestiae, ab rerum non tenetur praesentium molestias quae harum alias distinctio iusto
                saepe et minima?
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quae vel qui aspernatur hic laborum,
                fuga incidunt non debitis praesentium atque? Earum commodi fugit, facere nulla doloremque nihil a odit.
            </p>
        </div> <!-- / About-->
    </section>

    <section class="my-work" id="work">
        <h2 class="section__title">My Work</h2>
        <p class="section__subtitle"></p>

        <div class="portfolio">
            <a href="#" class="portfolio__item">
                <img src="portfolio-01.jpg" class="portfolio__img" alt="porfolio-01">
            </a>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <a href="mailto:jerickbaetiong02@gmail.com" class="footer__link">jerickbaetiong02@gmail.com</a>
        <ul class="social-list">
            <!-- <li class="social-list__item"><a href="https://facebook.com/oneandonlyu" class="social-list__link">fb</a> -->
            </li>
            <li class="social-list__item"><a href="https://twitter.com/jerickmb" class="social-list__link">twitter</a>
            </li>
            <li class="social-list__item"><a href="" class="social-list__link"></a></li>
        </ul>
    </footer>
</body>

</html>