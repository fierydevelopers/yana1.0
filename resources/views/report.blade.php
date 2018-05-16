<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/superhero/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YANA &mdash; youarenotalone.ml</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="you are not alone, sexual assault, sexual harassment"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon1.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon1.ico">

    <!-- Google Webfont -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Crimson+Text' rel='stylesheet' type='text/css'>
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Easy Responsive Tabs -->
    <link rel="stylesheet" href="css/easy-responsive-tabs.css">

    <!-- Theme Style substyle.css-->
    <link rel="stylesheet" href="css/testsubstyle.css">
    <link rel="stylesheet" href="css/css/icomoon.css">


    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        /** {*/

        /*font-family: "Helvetica Neue";*/

        /*}*/

        /*p, text {*/

        /*font-size: 0.85em;*/

        /*}*/

        svg {
            background: #E8F6F3;

        }

        .white-popup {
            position: relative;
            background: #FFF;
            padding: 20px;
            width: auto;
            max-width: 768px;
            max-height: 600px;
            overflow: scroll;
            margin: auto;
        }

        @media screen and (max-width: 768px) {
            .white-popup {
                position: relative;
                background: #FFF;
                padding: 20px;
                width: auto;
                max-width: 500px;
                margin-top: 20%;
                margin-bottom: 20%;
            }
        }

        /* flip */

        /*@import url("https://fonts.googleapis.com/css?family=Roboto+Mono");
      * {
        box-sizing: border-box;
        font-weight: normal;
      }

      body {
        color: #555;
        background: #222;
        text-align: center;
        font-family: 'Roboto Mono';
        padding: 1em;
      }

      h1 {
        font-size: 2.2em;
      }*/

        .flip {
            position: relative;
        }

        .flip > .front,
        .flip > .back {
            display: block;
            transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition-duration: .5s;
            transition-property: transform, opacity;
        }

        .flip > .front {
            transform: rotateY(0deg);
            background-color: #138D75 !important;
        }

        .flip > .back {
            position: absolute;
            opacity: 0;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            transform: rotateY(-180deg);

        }

        .flip:hover > .front {
            transform: rotateY(180deg);
        }

        .flip:hover > .back {
            opacity: 1;
            transform: rotateY(0deg);
        }

        .flip.flip-vertical > .back {
            transform: rotateX(-180deg);
        }

        .flip.flip-vertical:hover > .front {
            transform: rotateX(180deg);
        }

        .flip.flip-vertical:hover > .back {
            transform: rotateX(0deg);
        }

        .flip {
            position: relative;
            display: inline-block;
            margin-right: 2px;
            margin-bottom: 1em;
            width: 300px;
        }

        .flip > .front,
        .flip > .back {
            display: block;
            color: white;
            width: inherit;
            background-size: cover !important;
            background-position: center !important;
            height: 220px;
            padding: 1em 2em;
            background: #313131;
            border-radius: 10px;
        }

        .flip > .front p,
        .flip > .back p {
            font-size: 0.9125rem;
            line-height: 160%;
            color: #999;
        }

        .text-shadow {
            text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
        }

        /* Layout styles only, not needed for functionality */

        /*html {
          font-family: sans-serif;
          padding-right: 1em;
          padding-left: 1em;
        }*/

        .grid {
            display: grid;
            grid-column-gap: 1em;
            grid-row-gap: 1em;
            grid-template-columns: repeat(1, 1fr);
        }

        @media (min-width: 31em) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        *

        /

        /*barchart!*/

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
        body {
            background: #1F1E24;
            height: 200px;
            font-family: 'Open Sans', sans-serif;
        }

        /*piechart!*/
        .circle-chart {
            cursor: pointer;
            float: left;
            margin: 10px;
            height: 300px;
            position: relative;
            width: 300px;
        }

        .circle-chart p {
            color: #138D75;
            font-family: sans-serif;
            font-size: 4em;
            font-weight: 600;
            line-height: 1em;
            margin-top: -0.5em;
            position: absolute;
            top: 50%;
            left: 0;
            text-align: center;
            width: 100%;
            -webkit-animation: fadein 1.5s;
            /* Safari, Chrome and Opera > 12.1 */

            -moz-animation: fadein 1.5s;
            /* Firefox < 16 */

            -ms-animation: fadein 1.5s;
            /* Internet Explorer */

            -o-animation: fadein 1.5s;
            /* Opera < 12.1 */

            animation: fadein 1.5s;
        }

        .circle-chart .bar {
            height: 80%;
            margin: -40% 0 0 -5px;
            position: absolute;
            left: 50%;
            top: 50%;
            width: 3%;
        }

        .circle-chart .bar:after,
        .circle-chart.bar:before {
            background: #138D75;
            border-radius: 10px;
            content: "";
            height: 15%;
            position: absolute;
            top: -10%;
            left: 0;
            width: 100%;
        }

        .circle-chart .bar:nth-child(2) {
            -ms-transform: rotate(10deg);
            -webkit-transform: rotate(10deg);
            transform: rotate(10deg);
        }

        .circle-chart .bar:nth-child(3) {
            -ms-transform: rotate(20deg);
            -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
        }

        .circle-chart .bar:nth-child(4) {
            -ms-transform: rotate(30deg);
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
        }

        .circle-chart .bar:nth-child(5) {
            -ms-transform: rotate(40deg);
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
        }

        .circle-chart .bar:nth-child(6) {
            -ms-transform: rotate(50deg);
            -webkit-transform: rotate(50deg);
            transform: rotate(50deg);
        }

        .circle-chart .bar:nth-child(7) {
            -ms-transform: rotate(60deg);
            -webkit-transform: rotate(60deg);
            transform: rotate(60deg);
        }

        .circle-chart .bar:nth-child(8) {
            -ms-transform: rotate(70deg);
            -webkit-transform: rotate(70deg);
            transform: rotate(70deg);
        }

        .circle-chart .bar:nth-child(9) {
            -ms-transform: rotate(80deg);
            -webkit-transform: rotate(80deg);
            transform: rotate(80deg);
        }

        .circle-chart .bar:nth-child(10) {
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .circle-chart .bar:nth-child(11) {
            -ms-transform: rotate(100deg);
            -webkit-transform: rotate(100deg);
            transform: rotate(100deg);
        }

        .circle-chart .bar:nth-child(12) {
            -ms-transform: rotate(110deg);
            -webkit-transform: rotate(110deg);
            transform: rotate(110deg);
        }

        .circle-chart .bar:nth-child(13) {
            -ms-transform: rotate(120deg);
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg);
        }

        .circle-chart .bar:nth-child(14) {
            -ms-transform: rotate(130deg);
            -webkit-transform: rotate(130deg);
            transform: rotate(130deg);
        }

        .circle-chart .bar:nth-child(15) {
            -ms-transform: rotate(140deg);
            -webkit-transform: rotate(140deg);
            transform: rotate(140deg);
        }

        .circle-chart .bar:nth-child(16) {
            -ms-transform: rotate(150deg);
            -webkit-transform: rotate(150deg);
            transform: rotate(150deg);
        }

        .circle-chart .bar:nth-child(17) {
            -ms-transform: rotate(160deg);
            -webkit-transform: rotate(160deg);
            transform: rotate(160deg);
        }

        .circle-chart .bar:nth-child(18) {
            -ms-transform: rotate(170deg);
            -webkit-transform: rotate(170deg);
            transform: rotate(170deg);
        }

        .circle-chart .bar:nth-child(19) {
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .circle-chart .bar:nth-child(20) {
            -ms-transform: rotate(190deg);
            -webkit-transform: rotate(190deg);
            transform: rotate(190deg);
        }

        .circle-chart .bar:nth-child(21) {
            -ms-transform: rotate(200deg);
            -webkit-transform: rotate(200deg);
            transform: rotate(200deg);
        }

        .circle-chart .bar:nth-child(22) {
            -ms-transform: rotate(210deg);
            -webkit-transform: rotate(210deg);
            transform: rotate(210deg);
        }

        .circle-chart .bar:nth-child(23) {
            -ms-transform: rotate(220deg);
            -webkit-transform: rotate(220deg);
            transform: rotate(220deg);
        }

        .circle-chart .bar:nth-child(24) {
            -ms-transform: rotate(230deg);
            -webkit-transform: rotate(230deg);
            transform: rotate(230deg);
        }

        .circle-chart .bar:nth-child(25) {
            -ms-transform: rotate(240deg);
            -webkit-transform: rotate(240deg);
            transform: rotate(240deg);
        }

        .circle-chart .bar:nth-child(26) {
            -ms-transform: rotate(250deg);
            -webkit-transform: rotate(250deg);
            transform: rotate(250deg);
        }

        .circle-chart .bar:nth-child(27) {
            -ms-transform: rotate(260deg);
            -webkit-transform: rotate(260deg);
            transform: rotate(260deg);
        }

        .circle-chart .bar:nth-child(28) {
            -ms-transform: rotate(270deg);
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .circle-chart .bar:nth-child(29) {
            -ms-transform: rotate(280deg);
            -webkit-transform: rotate(280deg);
            transform: rotate(280deg);
        }

        .circle-chart .bar:nth-child(30) {
            -ms-transform: rotate(290deg);
            -webkit-transform: rotate(290deg);
            transform: rotate(290deg);
        }

        .circle-chart .bar:nth-child(31) {
            -ms-transform: rotate(300deg);
            -webkit-transform: rotate(300deg);
            transform: rotate(300deg);
        }

        .circle-chart .bar:nth-child(32) {
            -ms-transform: rotate(310deg);
            -webkit-transform: rotate(310deg);
            transform: rotate(310deg);
        }

        .circle-chart .bar:nth-child(33) {
            -ms-transform: rotate(320deg);
            -webkit-transform: rotate(320deg);
            transform: rotate(320deg);
        }

        .circle-chart .bar:nth-child(34) {
            -ms-transform: rotate(330deg);
            -webkit-transform: rotate(330deg);
            transform: rotate(330deg);
        }

        .circle-chart .bar:nth-child(35) {
            -ms-transform: rotate(340deg);
            -webkit-transform: rotate(340deg);
            transform: rotate(340deg);
        }

        .circle-chart .bar:nth-child(36) {
            -ms-transform: rotate(350deg);
            -webkit-transform: rotate(350deg);
            transform: rotate(350deg);
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Firefox < 16 */

        @-moz-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Safari, Chrome and Opera > 12.1 */

        @-webkit-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Internet Explorer */

        @-ms-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Opera < 12.1 */

        @-o-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

    </style>

    <style type="text/css">
        .yana{
            color: #F8C471;
        }
        .yana:active,.yana:focus,.yana:hover{
            color: #F8C471;
            border-bottom: none;
            outline: none;
            text-decoration: none;
        }
    </style>

    <style type="text/css">
        svg{
            width: 100vw;
            height: 100px;
            fill: #FFFFFF;
            background-color: #ffffff;
            margin-bottom: 20px;
        }
        .step-container{
            font-size: 20px;
            -webkit-filter: url("#goo");
            filter: url("#goo");
        }
        .step{
            stroke: #138D75;
            stroke-width: 0px;
        }
        .line{
            stroke: #0E6655;
            stroke-width: 6px;
        }
        span{
            display: inline-block;
            position: relative;
        }
        .step-number{
            left: 20%;top: 20%;
            margin : -55px 0 0 -6px;
            display: none;
        }
        /*.step-info{*/
        /*font-size: 12px;*/
        /*width: 60px;*/
        /*line-height: 14px;*/
        /*text-align: center;*/
        /*top: 60%; left: 14.2%;*/
        /*margin: 30px 0 0 -30px;*/
        /*}*/

        .done{
            r: '20',
            fill: '#138D75',
            stroke: '#ffffff',
            strokeWidth: '12px'
        }
        .step-info{
            font-size: 16px;
            width: 15px;
            line-height: 15px;
            text-align: justify;
            top: 5%; left: 14%;
            margin: 0 0 0 -18px;

        }
        .step-info:nth-of-type(3){
            left: 28%;
        }
        .step-info:nth-of-type(4){
            left: 42%;
        }
        .step-info:nth-of-type(5){
            left: 56%;
        }
        .step-info:nth-of-type(6){
            left: 70%;
        }
        .step-info:nth-of-type(7){
            left: 84%;
        }
    </style>

</head>

<body class="inner-page">

<!-- START #fh5co-header -->
<header id="fh5co-header-section" role="header" class="">
    <div class="container">

        <!-- START #fh5co-logo -->
        <h1 id="fh5co-logo" class="pull-left"><a href="/loadhome"
                                                 style="font-family: 'Lato', arial, sans-serif;">YANA</a></h1>

        <!-- START #fh5co-menu-wrap -->
        <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">

                <li><a href="/loadami">Am I a Victim</a></li>
                <li class="active"><a href="#">Statistics</a></li>
                <li><a href="/loaduni">Working together</a></li>
                <li>
                    <a href="#" class="fh5co-sub-ddown">Get support</a>
                    <ul class="fh5co-sub-menu">
                        <li><a href="/loadsupport">Never Too Late</a></li>
                        <li><a href="/loadpolice">The First Step</a></li>
                        <li><a href="/loadcourt">You Deserve Justice</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- START #fh5co-hero -->
<aside id="fh5co-hero" style="background-image: url(images/rere.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="fh5co-hero-wrap">
                    <div class="fh5co-hero-intro">
                        <h1>Statistics</h1>
                        {{--<h1>We are behind you.</h1>--}}
                        <h2>more details<span></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

<div id="fh5co-main">
    {{--<h2 class="fh5co-uppercase-heading-sm text-center" style="font-weight: bold ;padding-bottom: 25px">--}}
        {{--We understand your situation.<br> Many things might be running through your mind which is making you hold back.--}}
    {{--</h2>--}}

    <span class="step-number">
            </span>
    <span class="step-info" style=" font-family: 'Lato', arial, sans-serif;
            font-weight: bold;">Am I a Victim?
            </span>
    <span class="step-info" style="font-family: 'Lato', arial, sans-serif;
            font-weight: bold; color: grey">Statistics
            </span>
    <span class="step-info" style="font-family: 'Lato', arial, sans-serif;
            font-weight: bold; color: grey">Working together
            </span>
    <span class="step-info" style="font-family: 'Lato', arial, sans-serif;
            font-weight: bold; color: grey">Never Too Late
            </span>
    <span class="step-info" style="font-family: 'Lato', arial, sans-serif;
            font-weight: bold; color: grey">The First Step
            </span>
    <span class="step-info" style="font-family: 'Lato', arial, sans-serif;
            font-weight: bold; color: grey">You Deserve Justice
            </span>
    <svg>
        <line class='line' x1="0%" y1="60%" x2="100%" y2="60%"/>
        <g class="step-container">
            <circle class="step" id="step1" cx="14%" cy="60%" r="15"/>
            <circle class="step" id="step2" cx="28%" cy="60%" r="15"/>
            <circle class="step"  id="step3" cx="42%" cy="60%" r="15"/>
            <circle class="step" cx="56%" cy="60%" r="15"/>
            <circle class="step" cx="70%" cy="60%" r="15"/>
            <circle class="step" cx="84%" cy="60%" r="15"/>
            <circle class="cursor" cx="-12px" cy="60%" r="10"/>
        </g>
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur"/>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 15 -9"
                               result="goo"/>
                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
            </filter>
        </defs>
    </svg>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="fh5co-spacer fh5co-spacer-sm"></div>
            </div>
            <div class="col-md-10 col-md-offset-1 clearfix fh5co-header">
                <h1 class="h1 fh5co-heading fh5co-no-margin-bottom">You are taken seriously</h1>
                <h4 class="h5 fh5co-heading-sub" style="text-align: center">We understand your situation.<br> Many things might be running through your mind which is making you hold back.
                    The truth is that you are not alone. The following information signifies the number of
                    people who might be having your thoughts too and hence silent.
                </h4>

                <div class="fh5co-spacer fh5co-spacer-sm"></div>
            </div>

        </div>
        <div class="fh5co-spacer fh5co-spacer-sm"></div>

    </div>

    <section id="fh5co-feature">
        <section>
            <div class="container" style="padding-top: 20px" id="schoolA">
                <div class="row">

                    <div class="col-md-10 col-md-offset-1 clearfix fh5co-header">
                        {{--<h2>The truth is that you are not alone. The following information signifies the number of--}}
                            {{--people who might be having your thoughts too and hence silent.</h2>--}}

                        <br>
                        <div class="flip">
                            <div class="front">
                                <h1 class="text-shadow">THOUGHT 1</h1>
                                <h3><a class="yana">72%</a> of the victims did not think it was serious enough to report.</h3>
                            </div>
                            <div class="back">
                                <h2>Any unwanted sexual advance is taken seriously by the law.</h2>
                                <!-- <h2>You need a great deal of courage to stand up and take action.</h2> -->
                            </div>
                        </div>
                        <div class="flip">
                            <div class="front">
                                <h1 class="text-shadow">THOUGHT 2</h1>
                                <h3><a class="yana">55%</a> of the victims did not think they needed help.<br>&nbsp;</h3>

                            </div>
                            <div class="back">
                                <h2>You are not alone. Help is readily available.</h2>
                            </div>
                        </div>
                        <div class="flip">
                            <div class="front">
                                <h1 class="text-shadow">THOUGHT 3</h1>
                                <h3><a class="yana">16%</a> of the victims did not know where they had to go to make a report.</h3>
                            </div>
                            <div class="back">
                                <h2> There are numerous support services in and out of Monash to assist you to make a
                                    report.</h2>
                            </div>
                        </div>

                        <!-- vertical "flip flip-vertical"-->
                        <div class="flip">
                            <div class="front">
                                <h1 class="text-shadow">THOUGHT 4</h1>
                                <h3><a class="yana">11%</a> of the victims did not know about the report procedure.</h3>
                            </div>
                            <div class="back">
                                <h2>The report procedure is easily accessible to inform you.</h2>
                            </div>
                        </div>
                        <div class="flip">
                            <div class="front">
                                <h1 class="text-shadow">THOUGHT 5</h1>
                                <h3><a class="yana">9%</a> of the victims thought it would be too hard to prove.</h3>
                            </div>
                            <div class="back">
                                <h2>Its occurence is enough proof.</h2>
                            </div>
                        </div>
                        <div class="flip">
                            <div class="front">
                                <h1 class="text-shadow">THOUGHT 6</h1>
                                <h3><a class="yana">9%</a> of the victims did not want to be in trouble or cause harm.</h3>
                            </div>
                            <div class="back">
                                <h2> We understand but don't be afraid to speak up.You and society need to be kept
                                    safe.</h2>
                            </div>
                        </div>

                        <!--
                                  <div class="fh5co-feature-item flip flip-vertical">
                                      <div class="front" >
                                        <h2 class="text-center fh5co-feature-title h4 text-uppercase">Free HTML5 Template</h2>
                                        <p class="text-center fh5co-feature-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid placeat nobis veritatis neque earum possimus tempora sunt.</p>

                                      </div>
                                      <div class="back">
                                         <h2>11% victims did not want to hurt the offenders or get themselves into trouble.</h2>
                                      </div>
                                  </div> -->


                        <!-- <div class="col-md-3 col-sm-6 fh5co-feature-item flip flip-vertical">
                                <span class="fh5co-feature-icon"><i class="ti-gift"></i></span>
                                <h2 class="text-center fh5co-feature-title h4 text-uppercase">Free HTML5 Template</h2>
                                <p class="text-center fh5co-feature-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid placeat nobis veritatis neque earum possimus tempora sunt.</p>
                                <p class="text-center"><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                                </div> -->

                        <h2><br> The truth is, only <a class="yana">6</a> percent of Monash International sexual assault victims
                            reported the incident to the police or sought support and assistance from university.</h2>

                        <!-- pie chart -->
                        <h1 class="h1 fh5co-heading fh5co-no-margin-bottom">However, if you take legal action, the
                            winning percentage is:</h1>
                        <br><br>
                        <div class="grid">
                            <div class="container">
                                <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="col-md-6 circle-chart" data-percent="100"></div>
                                    <h2 class="col-md-6"
                                        style="text-align: center;font-weight: bold;font-size: 1.5em; padding-top: 50px">
                                        Sentencing Outcomes of Rape Cases, Higher Courts, 1 July 2011 to 30 June
                                        2016</h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-6 circle-chart" data-percent="98.7" ></div>
                                    <h2 class="col-md-6"
                                        style="text-align: center;font-weight: bold;font-size: 1.5em; padding-top: 50px">
                                        Sentencing Outcomes of Indecent Assault Cases, Higher Courts, 1 July 2011 to 30
                                        June 2016</h2>
                                </div>
                                </div>
                            </div>
                        </div>


                        <div id="RM" class="white-popup mfp-hide">
                            <div class="col-md-12 col-sm-6 row" style="padding-top: 30px;">
                                <div class="col-md-6" style="text-align: center"><span>Highlight keyword:</span></div>
                                <div class="col-md-6"><input type="text" class="myInput2" name="keyword"
                                                             value="support"></div>
                            </div>
                            <div class="row context">
                                <div class="col-md-12">
                                    <h2 class="h3">Aesthetic Design</h2>
                                </div>
                                <div class="col-md-6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis deserunt
                                        dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem delectus
                                        quos atque similique natus eaque qui, nisi repudiandae dolore sit! Lorem
                                        ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius magnam.
                                        Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod cum nemo
                                        consequuntur quidem labore minima dignissimos, eum!Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit. Assumenda quis deserunt dolorem, debitis
                                        cupiditate nihil velit dolores, inventore voluptatem delectus quos atque
                                        similique natus eaque qui, nisi repudiandae dolore sit! Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipisicing elit. Cum aut maxime eius magnam. Ipsa qui consequatur
                                        laborum culpa recusandae ullam repellendus, quod cum nemo consequuntur quidem
                                        labore minima dignissimos, eum!Lorem ipsum dolor sit amet, consectetur
                                        adipisicing
                                        elit. Assumenda quis deserunt dolorem, debitis cupiditate nihil velit dolores,
                                        inventore voluptatem delectus quos atque similique natus eaque qui, nisi
                                        repudiandae dolore sit! Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Cum aut maxime eius magnam. Ipsa qui consequatur laborum culpa recusandae ullam
                                        repellendus, quod cum nemo consequuntur quidem labore minima dignissimos,
                                        eum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quis
                                        deserunt dolorem, debitis cupiditate nihil velit dolores, inventore voluptatem
                                        delectus quos atque similique natus eaque qui, nisi repudiandae dolore sit!
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut maxime eius
                                        magnam. Ipsa qui consequatur laborum culpa recusandae ullam repellendus, quod
                                        cum nemo consequuntur quidem labore minima dignissimos, eum!</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatem, vitae
                                        nesciunt ad hic quam quisquam sit possimus officia ratione. Lorem ipsum dolor
                                        sit amet, consectetur adipisicing elit. Molestias, ex. Lorem ipsum dolor
                                        sit amet, consectetur adipisicing elit. Ex fuga illum necessitatibus
                                        consequuntur aspernatur omnis quidem ut, similique esse assumenda.</p>
                                </div>
                            </div>
                        </div>


                    </div>
        </section>

    </section>

    <footer id="fh5co-footer">
        <div class="container">
            <p class="text-muted fh5co-no-margin-bottom text-center" style="padding-top: 20px">
                <small>&copy; 2018 <a href="#">Fiery Developers</a>. All rights reserved.</small>
            </p>

        </div>
    </footer>
</div>

<div class="gototop js-top" id="gott">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.6.0/d3.min.js"></script>
<script src="js/js/bubo.js"></script>
<!-- jQuery -->
<script src="js/jquery-1.10.2.min.js"></script>



<script src="//cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js"></script>
<script src="//cdn.jsdelivr.net/velocity/1.2.2/velocity.ui.min.js"></script>
<script type="text/javascript">
    $(function() {
        let step_one;
        let current_step;
        let allowAnim = false;
        let steps = $('.step');
        steps.hide();

        $.Velocity.RegisterEffect("transition.stepAnim", {
            defaultDuration: 1000,
            calls: [
                [{
                    r: '5',
                    fill: '#138D75',
                    stroke: '#0E6655',
                    strokeWidth: '3px'
                }, 0.5, {
                    easing: [10, 5]
                }],
                [{
                    r: '15'
                }, 0.5, {
                    easing: [70, 8]
                }]
            ]

        })
            .RegisterEffect("transition.inverseStepAnim", {
                defaultDuration: 500,
                calls: [
                    [{
                        r: '20',
                        fill: '#138D75',
                        stroke: '#ffffff',
                        strokeWidth: '12px'
                    }, 1, {
                        easing: [10, 5]
                    }]
                ]

            });

        function init() {
            steps
                .velocity('transition.bounceLeftIn', {
                    duration: 1000,
                    stagger: 70
                })
                .velocity({
                    strokeWidth: [12, 0]
                }, {
                    duration: 1000,
                    easing: [70, 8],
                    complete: function() {
                        allowAnim = true;
                    }
                });
            current_step = $('.current-step');
            step_one = $('#step1');
            step_two = $('#step2');
            changeStep(step_one);
            changeStep(step_two);
        }

        init();

        steps.click(function(e) {
            if (allowAnim) {
                changeStep($(this));
            }
        });

        function changeStep(element) {
            // $('.step-info').hide();
            let cur_pos = element.attr('cx');

            $('.cursor').velocity({
                cx: cur_pos
            }, {
                duration: 500,
                easing: [70, 8]
            });

            let num = parseInt(cur_pos) / 14;

            $('.step-number').text(num);

            $('.step-number').velocity({
                left: cur_pos
            }, {
                duration: 500,
                easing: [70, 8]
            });
            $('.step-info:nth-of-type('+( num + 1 )+')').velocity('transition.slideUpIn', {delay : 1000});
            if (element.attr('class') == 'step') {
                current_step.velocity('transition.inverseStepAnim');
                current_step.attr("class", "step");
            }
            element.velocity('transition.stepAnim');
            element.attr("class", "step current-step");
            current_step = element;
        };

    });
</script>

<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
{{--
<script src="https://code.jquery.com/jquery-latest.min.js"></script>--}}
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/mark.js/8.6.0/jquery.mark.min.js"></script>
<script src="path_to/node_modules/tablefilter/dist/tablefilter/tablefilter.js"></script>
<script src="js/js/mark.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Easy Responsive Tabs -->
<script src="js/easyResponsiveTabs.js"></script>
<!-- FastClick for Mobile/Tablets -->
<script src="js/fastclick.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

<script src="js/js/piechart.js"></script>

</body>

</html>
