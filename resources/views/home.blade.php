@extends('layouts.app')

@section('content')
<!-- Introduction -->

<section class="intro" id="home">
    <h1 class="section__title section__title--intro"  data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
        <p>Hi, I'm </p>
        <strong>Jerick Baetiong</strong>
    </h1>
    <p class="section__subtitle section__subtitle--intro"  data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Full Stack Developer from Philippines</p>
</section>

<!-- End Introduction -->

<!-- My Services -->
<section class="my-services" id="services">
    <h2 class="section__title section__title--services">What I do</h2>
    <div class="services">
        <div class="service"  data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <h3>
                <object data="{{secure_asset('images/design.svg')}}" width="50px" type="image/svg+xml"
                    class="icon"></object> UI/UX
                Design
            </h3>
            <p>Design websites and web applications that is easy to use while having a clean and presentable
                design.</p>
        </div><!-- / service -->

        <div class="service"  data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <h3>
                <!-- <img src="{{secure_asset('images/develop.png')}}" class="service__image" alt="">  -->
                <object data="{{secure_asset('images/develop.svg')}}" width="50px" type="image/svg+xml"
                    class="icon"></object>
                Develop
            </h3>
            <p>Develop websites and web applications using the latest web technologies and writing clean and
                maintainable code.
            </p>
        </div><!-- / service -->

        <div class="service"  data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <h3>
                <!-- <img src="{{secure_asset('images/deploy.png')}}" class="service__image" alt="">  -->
                <object data="{{secure_asset('images/deploy.svg')}}" width="50px" type="image/svg+xml"
                    class="icon"></object>
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
    <p class="section__subtitle section__subtitle--about">Full stack developer based out of Metro Manila,
        Philippines</p>

    <div class="about-me__body">
        <p>
            I'm Jerick Baetiong. Full stack developer with 2+ years of hands-on experience in designing, developing,
            implementing, and deploying websites and web applications using a range of latest web technologies.
            Seeking to leverage broad development experience and hands-on techinical expertise in a challenging role
            as a full stack developer.
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
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                HTML5
            </span>
            <img src="{{secure_asset('images/html5.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                CSS3
            </span>
            <img src="{{secure_asset('images/css3.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Javascript
            </span>
            <img src="{{secure_asset('images/javascript.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Bootstrap
            </span>
            <img src="{{secure_asset('images/bootstrap.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Laravel
            </span>
            <img src="{{secure_asset('images/laravel.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                JQuery
            </span>
            <img src="{{secure_asset('images/jquery.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Vue JS
            </span>
            <img src="{{secure_asset('images/vue.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Vuetify
            </span>
            <img src="{{secure_asset('images/vuetify.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Git
            </span>
            <img src="{{secure_asset('images/git.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Github
            </span>
            <img src="{{secure_asset('images/github.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                Gitlab
            </span>
            <img src="{{secure_asset('images/gitlab.png')}}" alt="webtech">
        </div>
        <div class="technology tooltip" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
            <span class="tooltiptext">
                MySQL
            </span>
            <img src="{{secure_asset('images/mysql.png')}}" alt="webtech">
        </div>
    </div>
</section>

<section class="my-work" id="work">
    <h2 class="section__title section__title--work">My Work</h2>
    <p class="section__subtitle section__subtitle--work">Selection of my range of work</p>

    <div class="portfolio">
        <div class="portfolio__item" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <a href="https://instagram-clone-9f10e.web.app">
                <img src="{{secure_asset('images/ig-clone2.png')}}" class="portfolio__img" alt="porfolio-02">

            </a>
            <p>Instagram Clone</p>
        </div>
        <div class="portfolio__item" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
            <a href="https://chat-application-cb68c.web.app">
                <img src="{{secure_asset('images/mern-chat1.png')}}" class="portfolio__img" alt="porfolio-01">
            </a>
            <p>Web Chat Application</p>
        </div>


    </div>
    <!-- <div class="portfolio">
        
    </div> -->



</section>

@endsection