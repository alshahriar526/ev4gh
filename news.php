<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'partials/head.php'; ?>
    <style>
        /* ------------------------------
Section - News
-------------------------------- */
        div{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline
        }
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block
        }
        body {
            line-height: 1
        }
        ol,
        ul {
            list-style: none
        }
        blockquote,
        q {
            quotes: none
        }
        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none
        }
        table {
            border-collapse: collapse;
            border-spacing: 0
        }
        .post-module {
            position: relative;
            z-index: 1;
            display: block;
            background: #FFFFFF;
            min-width: 270px;
            height: 470px;
            -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            -webkit-transition: all 0.3s linear 0s;
            -moz-transition: all 0.3s linear 0s;
            -ms-transition: all 0.3s linear 0s;
            -o-transition: all 0.3s linear 0s;
            transition: all 0.3s linear 0s;
            border: 0;
        }
        .post-module:hover,
        .hover {
            -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
        }
        .post-module:hover .thumbnail img,
        .hover .thumbnail img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            transform: scale(1.1);
            opacity: 0.6;
        }
        .post-module .thumbnail {
            background: #000000;
            height: 400px;
            overflow: hidden;
        }
        .post-module .thumbnail .date {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1;
            background: var(--color-default);
            width: 70px;
            height: 70px;
            padding: 12.5px 0;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            color: #FFFFFF;
            font-weight: 700;
            text-align: center;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .post-module .thumbnail .date .day {
            font-size: 18px;
        }
        .post-module .thumbnail .date .month {
            font-size: 12px;
            text-transform: uppercase;
        }
        .post-module .thumbnail img {
            display: block;
            width: 120%;
            -webkit-transition: all 0.3s linear 0s;
            -moz-transition: all 0.3s linear 0s;
            -ms-transition: all 0.3s linear 0s;
            -o-transition: all 0.3s linear 0s;
            transition: all 0.3s linear 0s;
        }
        .post-module .post-content {
            position: absolute;
            bottom: 0;
            background: #FFFFFF;
            width: 100%;
            padding: 30px;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        }
        .post-module .post-content .category {
            position: absolute;
            top: -34px;
            left: 0;
            background: var(--color-default);
            padding: 10px 15px;
            color: #FFFFFF;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .post-module .post-content .card-title {
            margin: 0;
            padding: 0 0 10px;
            color: #333333;
            font-size: 20px;
            font-weight: 600;
            line-height: 1.2;
        }
        .post-module .post-content .sub_title {
            margin: 0;
            padding: 0 0 20px;
            color: var(--color-default);
            font-size: 20px;
            font-weight: 400;
        }
        .post-module .post-content .description {
            display: none;
            color: #666666;
            font-size: 18px;
            line-height: 1.5em;
        }
        .post-module .post-content .post-meta {
            margin: 30px 0 0;
            color: #999999;
        }
        .post-module .post-content .post-meta .timestamp {
            margin: 0 16px 0 0;
        }
        .post-module .post-content .post-meta a {
            color: #999999;
            text-decoration: none;
        }
        .hover .post-content .description {
            display: block !important;
            height: auto !important;
            opacity: 1 !important;
        }
        .news-section .card-body a.read-more-para-btn {
            color: #116466;
            font-size: 18px;
            line-height: 1.5;
            font-weight: 900;
            padding: 0;
            margin: 5px 0;
        }
        .news-section .card-body a.read-more-para-btn:hover {
            color: var(--color-default);
            font-size: 18px;
            line-height: 1.5;
            font-weight: 500;
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
                            <h2>News and blogs</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>News and blogs</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="news-section" class="ev4gh-section news-section p-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col mb-4">
                        <div class="card post-module">
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">27</div>
                                    <div class="month">Mar</div>
                                    <div class="Year">2024</div>
                                </div><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
                            </div>
                            <div class="card-body post-content">
                                <div class="category">Blog</div>
                                <h1 class="card-title">A facilitator’s perspectives and learnings from EV4GH 2022,
                                    Colombia by Kranthi Vysyaraju</h1>
                                <!-- <h2 class="sub_title">The city that never sleeps.</h2> -->
                                <p class="card-text description">In November 2022, I had the opportunity to serve as a
                                    facilitator for the Emerging Voices for Global Health face-to-face (F2F) training in
                                    Medellin (EV4GH 2022). During the three weeks of high adrenaline and activity at the
                                    EV4GH venture and Health Systems Research symposium (Bogotá ), I journaled my
                                    observations and reflections from the sessions which took place indoors (big talks,
                                    debates, fishbowl)... <a class="read-more-para-btn btn" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">Read more ></a></p>
                                <div class="post-meta"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card post-module">
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">27</div>
                                    <div class="month">Mar</div>
                                    <div class="Year">2024</div>
                                </div><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
                            </div>
                            <div class="card-body post-content">
                                <div class="category">Blog</div>
                                <h1 class="card-title">A facilitator’s perspectives and learnings from EV4GH 2022,
                                    Colombia by Kranthi Vysyaraju</h1>
                                <!-- <h2 class="sub_title">The city that never sleeps.</h2> -->
                                <p class="card-text description">In November 2022, I had the opportunity to serve as a
                                    facilitator for the Emerging Voices for Global Health face-to-face (F2F) training in
                                    Medellin (EV4GH 2022). During the three weeks of high adrenaline and activity at the
                                    EV4GH venture and Health Systems Research symposium (Bogotá ), I journaled my
                                    observations and reflections from the sessions which took place indoors (big talks,
                                    debates, fishbowl)... <a class="read-more-para-btn btn" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">Read more ></a></p>
                                <div class="post-meta"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card post-module">
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">27</div>
                                    <div class="month">Mar</div>
                                    <div class="Year">2024</div>
                                </div><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
                            </div>
                            <div class="card-body post-content">
                                <div class="category">Blog</div>
                                <h1 class="card-title">A facilitator’s perspectives and learnings from EV4GH 2022,
                                    Colombia by Kranthi Vysyaraju</h1>
                                <!-- <h2 class="sub_title">The city that never sleeps.</h2> -->
                                <p class="card-text description">In November 2022, I had the opportunity to serve as a
                                    facilitator for the Emerging Voices for Global Health face-to-face (F2F) training in
                                    Medellin (EV4GH 2022). During the three weeks of high adrenaline and activity at the
                                    EV4GH venture and Health Systems Research symposium (Bogotá ), I journaled my
                                    observations and reflections from the sessions which took place indoors (big talks,
                                    debates, fishbowl)... <a class="read-more-para-btn btn" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">Read more ></a></p>
                                <div class="post-meta"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'partials/scripts.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(window).load(function() {
            $('.post-module').hover(function() {
                $(this).find('.description').stop().animate({
                    height: "toggle",
                    opacity: "toggle"
                }, 300);
            });
        });
    </script>
</body>
</html>
