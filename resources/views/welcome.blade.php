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
    <!-- <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="description" content="Jerick Baetiong, Fullstack Developer">


</head>

<body>
    <header class="border">
        <div class="logo">
            <!-- <img src="img/devjane.png" alt=""> -->
            <h3>&lt;JERICK-DEV&gt;</h3>

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


    <!-- Introduction -->

    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
            <p>Hi, I'm </p>
            <strong>Jerick Baetiong</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">Full Stack Developer from Philippines</p>
    </section>

    <!-- End Introduction -->

    <!-- My Services -->
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services">What I do</h2>
        <div class="services">
            <div class="service">
                <h3>
                    <object data="{{asset('images/design.svg')}}" type="image/svg+xml" class="icon"></object> UI/UX
                    Design
                </h3>
                <p>Design websites and web applications that is easy to use while having a clean and presentable
                    design.</p>
            </div><!-- / service -->

            <div class="service">
                <h3>
                    <!-- <img src="{{asset('images/develop.png')}}" class="service__image" alt="">  -->
                    <object data="{{asset('images/develop.svg')}}" type="image/svg+xml" class="icon"></object>
                    Develop
                </h3>
                <p>Develop web applications using the latest web technologies and writing clean and maintainable code.
                </p>
            </div><!-- / service -->

            <div class="service">
                <h3>
                    <!-- <img src="{{asset('images/deploy.png')}}" class="service__image" alt="">  -->
                    <object data="{{asset('images/deploy.svg')}}" type="image/svg+xml" class="icon"></object>
                    Deploy
                </h3>
                <p>Deploy websites and web applications and make it available to everyone using the latest deployment
                    technologies.</p>
            </div><!-- / service -->

        </div><!-- / Services -->

        <a href="#work" class="btn">My Work</a>
    </section>


    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Full stack developer based out of Metro Manila
            Philippines</p>

        <div class="about-me__body">
            <p>
                I'm Jerick Baetiong. Full stack developer with 2+ years of hands-on experience in designing, developing
                implementing, and deploying websites and web applications using a range of latest web technologies.
                Seeking to leverage broad development experience and hands-on techinical expertise in a challenging role
                as a Full-stack Developer.
            </p>
            <p>
                <!-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quae vel qui aspernatur hic laborum,
                fuga incidunt non debitis praesentium atque? Earum commodi fugit, facere nulla doloremque nihil a odit. -->
            </p>
        </div> <!-- / About-->
    </section>


    <section class="web-technologies" id="tech">
        <h2 class="section__title">Web Technologies</h2>

        <div class="technologies">
            <div class="technology tooltip">
                <span class="tooltiptext">
                    HTML5
                </span>
                <img src="{{asset('images/html5.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    CSS3
                </span>
                <img src="{{asset('images/css3.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Javascript
                </span>
                <img src="{{asset('images/javascript.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Bootstrap
                </span>
                <img src="{{asset('images/bootstrap.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Laravel
                </span>
                <img src="{{asset('images/laravel.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    JQuery
                </span>
                <img src="{{asset('images/jquery.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Vue JS
                </span>
                <img src="{{asset('images/vue.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Vuetify
                </span>
                <img src="{{asset('images/vuetify.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Git
                </span>
                <img src="{{asset('images/git.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Github
                </span>
                <img src="{{asset('images/github.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    Gitlab
                </span>
                <img src="{{asset('images/gitlab.png')}}" alt="webtech">
            </div>
            <div class="technology tooltip">
                <span class="tooltiptext">
                    MySQL
                </span>
                <img src="{{asset('images/mysql.png')}}" alt="webtech">
            </div>
        </div>
    </section>

    <section class="my-work" id="work">
        <h2 class="section__title section__title--work">My Work</h2>
        <p class="section__subtitle section__subtitle--work">Selection of my range of work</p>

        <div class="portfolio">
            <a href="#" class="portfolio__item">
                <img src="{{asset('images/github.png')}}" class="portfolio__img" alt="porfolio-01">
            </a>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
        <a href="mailto:jerickbaetiong02@gmail.com" class="footer__link">jerickbaetiong02@gmail.com</a>
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
    </script>
</body>

</html>