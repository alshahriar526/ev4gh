<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/head.php'; ?>
    <style>
        /* ------------------------------
Section - testimonials
-------------------------------- */
        /* ------------------------------
Section - testimonials
-------------------------------- */
        .testimonials-section {
            background: #f0f8ff;
            /* height: 800px; */
            min-height: 800px;
        }

        .testimonials-section .section-heading-2 {
            background: var(--color-default);
            padding: 20px 30px;
            text-align: center;
            width: 100px;
            height: 400px;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .testimonials-section .section-heading-2 h1 {
            margin: 0;
            transform: rotate(270deg);
        }

        .testimonials-section .section-heading-2 h1>span {
            font-weight: 900;
            -webkit-text-stroke: 1px #fff;
            -webkit-text-fill-color: transparent;
            color: #fff;
            margin: 0;
        }

        .testimonials-section .card {
            background: #fff;
            height: 100%;
            border: 0;
        }

        .testimonials-section .card-body .card-title {
            color: #116466;
            margin-bottom: 10px;
            font-size: 20px;
            line-height: 1.5;
            font-weight: 600;
        }

        .testimonials-section .card-body .card-text {
            color: #000;
            margin: 0;
            font-size: 18px;
            line-height: 1.5;
            font-weight: 100;
        }

        .testimonials-section .card-body a.read-more-para-btn {
            color: #116466;
            font-size: 18px;
            line-height: 1.5;
            font-weight: 900;
            padding: 0;
            margin: 5px 0;
        }

        .testimonials-section .card-body a.read-more-para-btn:hover {
            color: var(--color-default);
            font-size: 18px;
            line-height: 1.5;
            font-weight: 500;
        }

        .testimonials-section .card-image {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background: #FFF;
            padding: 2px;
        }

        .testimonials-section .card .quote-open-fill {
            height: 60px !important;
            width: auto !important;
            opacity: .5;
        }

        .testimonials-section .card-image .card-img {
            height: 100px;
    width: 100px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #116466;
        }

        .testimonials-section .card .image-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-content: center;
            margin-top: 20px;
        }

        .testimonials-section .card .name-designation {
            margin-left: 30px;
        }

        .testimonials-section .card .name-designation .name {
            font-size: 18px;
            color: #116466;
            margin: 0;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .testimonials-section .card .name-designation p {
            font-size: 13px;
            color: #8b8989;
            margin: 0;
        }

        .modal-backdrop {
            background: rgb(228, 0, 0);
            background: -moz-linear-gradient(135deg, rgba(228, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 50%, rgba(18, 100, 102, 1) 100%);
            background: -webkit-linear-gradient(135deg, rgba(228, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 50%, rgba(18, 100, 102, 1) 100%);
            background: linear-gradient(135deg, rgba(228, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 50%, rgba(18, 100, 102, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e40000", endColorstr="#126466", GradientType=1);
            opacity: 1 !important;
        }

        .testimonial-modal {
            border: 0;
        }

        .testimonial-modal .modal-content,
        .testimonial-modal .modal-header,
        .testimonial-modal .modal-footer {
            background: transparent;
            border: 0;
        }

        .testimonial-modal .modal-body {
            min-height: 600px;
            width: 100%;
            background: #F0F8FF;
            border: 5px solid #fff;
            /* background: var(--color-support1); */
            border-radius: 25px;
            padding: 40px;
            border-color: var(--color-support1);
        }

        .testimonial-modal .image-content {
            display: flex;
            flex-direction: row;
            align-content: center;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 30px;
        }

        .testimonial-modal .name-designation {
            margin-left: 30px;
        }

        .testimonial-modal .name-designation h5.name {
            font-size: 18px;
            color: #116466;
            margin: 0;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .testimonial-modal .name-designation p {
            font-size: 13px;
            color: #8b8989;
            margin: 0;
        }

        .testimonial-modal .card {
            background: transparent;
            border: 0;
        }

        .testimonial-modal .card .quote-open-fill {
            margin-bottom: 10px;
        }

        .testimonial-modal .card .card-title {
            color: var(--color-support1);
            margin-bottom: 10px;
            font-size: 20px;
            line-height: 1.5;
            font-weight: 600;
        }

        .testimonial-modal .card .card-body {
            padding: 0;
        }

        .testimonial-modal .card .card-text {
            color: var(--color-support1);
            margin: 0;
            font-size: 18px;
            line-height: 1.5;
            font-weight: 100;
            margin-bottom: 10px;
        }

        .testimonial-modal .card-image {
            height: 100px;
    width: 100px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #116466;
        }

        .testimonial-modal .card .quote-open-fill {
            height: 60px !important;
            width: auto !important;
            opacity: .5;
        }

        .testimonial-modal .card-image .card-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #116466;
        }

        .testimonial-modal .card-body  ul li  {
            margin-bottom: 10px;
        }
        .testimonial-modal .card-body  p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Testimonial</h2>
                            <p>This year, EV4GH celebrates its 10th anniversary, among others through a series of blogs
                                from EV alumni from various cohorts. Since the first EV venture in Antwerp/Montreux
                                (2010), the program & network have evolved considerably, and we thought it would be nice
                                to see how EV alumni reflect on the experience and the network, especially with
                                hindsight, but also looking ahead, with a new EV venture (2020, Dubai) coming up ! In
                                the coming months, a series of blogs will be published, starting early August 2019.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Testimonial</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="testimonials-section" class="ev4gh-section testimonials-section p-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col mb-4">
                        <div class="card shadow-lg rounded">
                            <div class="card-body">
                                <img src="assets/images/quote-open-fill.svg" class="quote-open-fill card-img-top"
                                    alt="...">
                                <h5 class="card-title">The “Emerging Voices” venture as my passport to Global Health
                                    Citizenship </h5>
                                <p class="card-text description">I work at the Institute of public
                                    health in Bengaluru. I am health systems research working on various
                                    topics related to strengthening health systems... </p>
                                <a class="read-more-para-btn btn" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Read more ></a>
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src="https://ev4gh.net/wp-content/uploads/2019/12/Anar-Recent.jpg"
                                            alt="" class="card-img">
                                    </div>
                                    <div class="name-designation">
                                        <h5 class="name">Anar Ulikpan</h5>
                                        <p>Monitoring and Evaluation Specialist (Health programme), Abt Associates, Australia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-lg rounded">
                            <div class="card-body">
                                <img src="assets/images/quote-open-fill.svg" class="quote-open-fill card-img-top"
                                    alt="...">
                                <h5 class="card-title">I am because EV4GH is, and EV4GH is because we are</h5>
                                <p class="card-text description">I was part of the Emerging Voices for Global Health (EV4GH) 2013 cohort linked to the International Conference of AIDS and Sexually Transmitted infections (ICASA) in Cape Town, South Africa.</p>
                                <a class="read-more-para-btn btn" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Read more ></a>
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src="https://ev4gh.net/wp-content/uploads/2019/12/FreddyKitutu-1.jpg"
                                            alt="" class="card-img">
                                    </div>
                                    <div class="name-designation">
                                        <h5 class="name">Freddy Eric Kitutu</h5>
                                        <p>Lecturer and Health Systems Scholar, Pharmacy Department Acting Dean, School of Health Sciences, Makerere University College of Health Sciences</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-lg rounded">
                            <div class="card-body">
                                <img src="assets/images/quote-open-fill.svg" class="quote-open-fill card-img-top"
                                    alt="...">
                                <h5 class="card-title">Your voice never stops emerging.</h5>
                                <p class="card-text description">When I took part in the 2012 EV programme, I was working as a senior advisor to the Minister of Health’s Office of my country, Costa Rica. I remembered that some of my fellow EVs asked me at the time, as a joke: “What are you doing here? You have already emerged, you can talk with the big guys whenever you want!”  Fortunately, the joke proved to be wrong.</p>
                                <a class="read-more-para-btn btn" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Read more ></a>
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src="https://ev4gh.net/wp-content/uploads/2019/11/20191002_082328-rotated.jpg"
                                            alt="" class="card-img">
                                    </div>
                                    <div class="name-designation">
                                        <h5 class="name">Francisco Oviedo</h5>
                                        <p>EV 2012, Medical Officer, Ministry of Health of Costa Rica</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal -->
    <div class="modal fade testimonial-modal " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div
            class="modal-dialog modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-dialog-scrollable ">
            <div class="modal-content">
                <div
                    class="modal-header modal-header bg-transparent border-0 p-0 d-flex justify-content-end rounded-circle">
                    <button type="button" class=" close text-black rounded-circle" data-bs-dismiss="modal"
                        style=" height: 30px; width: 30px;
                    ">×</button>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="image-content">
                                <div class="card-image">
                                    <img src="https://ev4gh.net/wp-content/uploads/2019/12/Anar-Recent.jpg"
                                        alt="" class="card-img">
                                </div>
                                <div class="name-designation">
                                    <h5 class="name">Anar Ulikpan</h5>
                                    <p>Monitoring and Evaluation Specialist (Health programme), Abt Associates,
                                        Australia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/quote-open-fill.svg" class="quote-open-fill card-img-top"
                                        alt="...">
                                    <h5 class="card-title">The “Emerging Voices” venture as my passport to Global
                                        Health
                                        Citizenship </h5>
                                    <p class="card-text">I was part of the first ever Emerging Voices venture held back
                                        in 2010 (Antwerp/Montreux). When I first received an email from ITM informing me
                                        of my successful acceptance to the EV program, I was not sure if I could afford
                                        to leave my “very important” job for three long weeks. At the time, I was
                                        working as a National Consultant for the Health Sector Development Program of
                                        the Ministry of Health, Mongolia, and I considered myself as a relatively
                                        “emerged” professional. However, looking back, now I can confidently say my
                                        participation was one of the few best decisions I have ever made in my life.
                                        Just to name a few reasons why this is the case:</p>
                                    <ul>
                                        <li><span>It made me a “life-time” member of a larger global health family (with
                                                members from all over the world) from whom I drew my inspiration to
                                                pursue my research career.</span></li>
                                        <li><span>It made me realise how boring I was in communicating my ideas and
                                                presentations and provided me with all necessary skills and knowledge to
                                                become a more effective presenter/writer. As a result, my applications
                                                for a PhD scholarship submitted to three different institutions all got
                                                accepted. An unbelievable success! </span></li>
                                        <li><span>It sowed a “disruptive mindset” seed in my thinking, turning me into a
                                                life-long learner.</span></li>
                                        <li><span>It made me pursue my further career in international health and obtain
                                                my PhD degree from one of the best universities in Australia. </span>
                                        </li>
                                        <li><span>It gave me the confidence to work internationally which had been
                                                almost a “mission impossible” for me before my EV experience. </span>
                                        </li>
                                        <li><span>It provided me with the necessary tools, knowledge and confidence to
                                                apply to well-known International consulting companies like Abt
                                                Associates, and be successful in my application. </span></li>
                                        <li><span>The Googlegroup (to be exact, it is Kristof) keeps me up-to-date on
                                                the latest news and publications which is one of the reasons why I’m
                                                considered a “valuable” member within my team. </span></li>
                                        <li><span>Lastly but most importantly, thanks to the EV venture, I have met Dr
                                                Asmat Malik who later became my best colleague and friend, a “ruthless”
                                                critic, co-author of my papers and the greatest mentor whom I could ask
                                                the silliest question. Sadly, in May 2017, we all received the
                                                heartbreaking news of our dearest friend having passed away. He will
                                                always be remembered by the EV community as a passionate professional,
                                                best friend and the greatest human being. </span></li>
                                    </ul>
                                    <p><span>In a nutshell, the EV venture provided me with a passport to Global
                                            (Health) Citizenship. Being heard in a global platform is a rare
                                            opportunity, especially, for someone like me who was educated (and used to
                                            practice) in a former socialist/Soviet country, where open communication and
                                            diversity are not often encouraged. In fact, I was and still am the first
                                            and only EV from Mongolia. Moving forward, expanding the EV opportunity to
                                            engage those often-unheard voices would be a great contribution to the
                                            development of the global health community, and bring further equity and
                                            diversity within the EV community as well. </span></p>
                                    <p><span>Lastly, I must also say that the EV experience was not all “fairy tale”.
                                            The programme challenged my language abilities (English), fluency, critical
                                            thinking and presentation and networking skills. It also required some
                                            critical “de-learning” first, in order to “enable” my mind for innovation
                                            and different ways of thinking and doing. However, a diverse package of
                                            training, mentoring and peer learning opportunities provided by the EV
                                            venture assisted to overcome all these challenges. And the support and
                                            learning opportunities did not end there. It is not an exaggeration that in
                                            these ten years, not a week went by that I didn’t receive EV4GH
                                            emails/updates. Unbelievable! I cannot thank Kristof and the
                                            EV&nbsp;secretariat enough for their relentless effort&nbsp;to keep
                                            the&nbsp;EV&nbsp;loop still so alive and vibrant even 10 years since its
                                            start. </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'partials/scripts.php'; ?>
</body>

</html>
