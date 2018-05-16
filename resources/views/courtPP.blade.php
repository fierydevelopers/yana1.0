<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
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


    <!-- Theme Style style.css-->
    <link rel="stylesheet" href="css/testsubstyle.css">

    <link rel="stylesheet" href="css/css/scroll2.css">


    <style type="text/css">
        nava {
            position: fixed;
            right: 30px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            text-align: right;
            z-index: 100;
        }
        nava a {
            display: block;
            line-height: 25px;
            position: relative;
            padding-top: 20px;
            color: #138D75;
            text-decoration: none;
        }
        nava a:hover .nav-label {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }
        nava .nav-dot {
            display: block;
            width: 10px;
            height: 10px;
            position: absolute;
            right: 0;
            top: 50%;
            background-color: #138D75;
            border-radius: 100%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            transition: all 0.3s linear;
        }
        nava .nav-label {
            display: block;
            opacity: 0.5;
            visibility: hidden;
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px);
            transition: all 0.2s cubic-bezier(0.17, 0.67, 0.83, 0.67);
        }
        nava .is-dark a {
            color: #212121;
        }
        nava .is-dark .nav-dot {
            background-color: rgba(0, 0, 0, 0.5);
        }
        nava ul {
            margin: 0;
            padding: 0;
        }
        nava ul li {
            with: auto;
            list-style: none;
        }

    </style>

    <style type="text/css">
        .popup-trigger {
            /*display: block;*/
            /*width: 170px;*/
            /*right: 2rem;*/
            /*margin: 3em auto;*/
            /*text-align: center;*/
            /*color: #FFF;*/
            /*font-size: 18px;*/
            /*padding:1rem 2rem;*/
            /*text-decoration:none;*/
            /*font-weight: bold;*/
            /*text-transform: uppercase;*/
            /*border-radius: 50em;*/
            /*background: #35a785;*/
            /*box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07);*/
            /*transition:300ms all;*/
        }

        .popup-trigger:hover {
            opacity:.8;
        }

        .popup {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            z-index: 1000;
            width: 100%;
            background-color: gray;
            opacity: 0;
            visibility: hidden;
            transition:500ms all;

        }

        .popup.is-visible {
            opacity: 1;
            visibility: visible;
            transition:1s all;
        }

        .popup-container {
            transform:translateY(-50%);
            transition:500ms all;
            position: relative;
            width: 60%;
            margin: 2em auto;
            top: 5%;
            padding:5rem;
            background: #FFF;
            border-radius: .25em .25em .4em .4em;
            text-align: justify;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        @media screen and (max-width: 600px){
            .popup-container {
                transform:translateY(-50%);
                transition:500ms all;
                position: relative;
                width: 80%;
                height: 80%;
                margin: 2em auto;
                top: 5%;
                padding:5rem;
                background: #FFF;
                border-radius: .25em .25em .4em .4em;
                text-align: justify;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
                overflow-y: scroll;
            }

        }

        .is-visible .popup-container {
            transform:translateY(0);
            transition:500ms all;
        }

        .popup-container .popup-close {
            position: absolute;
            top: 8px;
            font-size:0;
            right: 8px;
            width: 30px;
            height: 30px;
        }


        .popup-container .popup-close::before,
        .popup-container .popup-close::after {
            content: '';
            position: absolute;
            top: 12px;
            width: 14px;
            height: 3px;
            background-color: #8f9cb5;
        }

        .popup-container .popup-close::before {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 8px;
        }

        .popup-container .popup-close::after {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 8px;
        }


        .popup-container .popup-close:hover:before,
        .popup-container .popup-close:hover:after {
            background-color:#35a785;
            transition:300ms all;
        }


    </style>


    <link rel="stylesheet" href="css/css/icomoon.css">


    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/modernizr-2.6.2.min.js"></style>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="inner-page">

<!-- START #fh5co-header -->
<header id="fh5co-header-section" role="header" class="" >
    <div class="container">

        <!-- START #fh5co-logo -->
        <h1 id="fh5co-logo" class="pull-left"><a href="/loadhome" style="font-family: 'Lato', arial, sans-serif;">YANA</a></h1>

        <!-- START #fh5co-menu-wrap -->
        <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
                <li><a href="/loadami" style="font-family: 'Lato', arial, sans-serif;">Am I a Victim</a></li>
                <li><a href="/loadreport" style="font-family: 'Lato', arial, sans-serif;">Statistics</a></li>
                <li><a href="/loaduni" style="font-family: 'Lato', arial, sans-serif;">Working together</a></li>
                <li class="active">
                    <a href="#" class="fh5co-sub-ddown" style="font-family: 'Lato', arial, sans-serif;">Get support</a>
                    <ul class="fh5co-sub-menu">
                        <li><a href="/loadsupport" style="font-family: 'Lato', arial, sans-serif;">Never Too Late</a></li>
                        <li><a href="/loadpolice" style="font-family: 'Lato', arial, sans-serif;">The First Step</a></li>
                        <li class="active" style="font-family: 'Lato', arial, sans-serif;">
                            <a href="/" class="fh5co-sub-ddown" style="font-family: 'Lato', arial, sans-serif;">You Deserve Justice</a>
                            <ul class="fh5co-sub-menu">
                                <li><a href="#PP1" style="font-family: 'Lato', arial, sans-serif;">Reasonable chance of conviction</a></li>
                                <li><a href="#PP2" style="font-family: 'Lato', arial, sans-serif;">Before a court case</a></li>
                                <li><a href="#PP3" style="font-family: 'Lato', arial, sans-serif;">Going to Court</a></li>
                                <li><a href="#PP4" style="font-family: 'Lato', arial, sans-serif;">Trial</a></li>
                                <li><a href="#PP5" style="font-family: 'Lato', arial, sans-serif;">Consent</a></li>
                                <li><a href="#PP6" style="font-family: 'Lato', arial, sans-serif;">The Verdict</a></li>
                                <li><a href="#PP7" style="font-family: 'Lato', arial, sans-serif;">Appeals</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    {{--<!-- Navigation -->--}}

    {{--<nava>--}}
        {{--<ul>--}}
            {{--<li><a href="#PP1"><span class="nav-dot"></span><span class="nav-label" style="text-align: center">Medical<br>Examination</span></a></li>--}}
            {{--<li><a href="#PP2"><span class="nav-dot"></span><span class="nav-label" style="text-align: center">A written<br>statement</span></a></li>--}}
            {{--<li><a href="#PP3"><span class="nav-dot"></span><span class="nav-label" style="text-align: center">Collection<br>of Evidence</span></a></li>--}}
            {{--<li><a href="#PP4"><span class="nav-dot"></span><span class="nav-label" style="text-align: center">Interviewing<br>the Perpetrator</span></a></li>--}}
            {{--<li><a href="#PP5"><span class="nav-dot"></span><span class="nav-label" style="text-align: center">The Court process&nbsp;&nbsp;&nbsp;&nbsp;<br>and Witness support &nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>--}}
            {{--<li><a href="#PP6"><span class="nav-dot"></span><span class="nav-label" style="text-align: center">Don’t want<br>to continue ?</span></a></li>--}}
        {{--</ul>--}}
    {{--</nava>--}}

    {{--<!-- End of Navigation -->--}}

</header>

<!-- START #fh5co-hero -->
<aside id="fh5co-hero" style="background-image: url(images/coco.jpg);">
    <!--a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></--a-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="fh5co-hero-wrap">
                    <div class="fh5co-hero-intro">
                        <h1>You deserve justice</h1>
                        <h2>Take the Chance<span></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>


<div id="fh5co-main" id="app-wrapper">

    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="fh5co-spacer fh5co-spacer-sm"></div>
                </div>
                <div class="col-md-10 col-md-offset-1 clearfix fh5co-header">
                    <h1 class="h1 fh5co-heading fh5co-no-margin-bottom">A walk through the court procedures</h1>
                    <h4 class="h5 fh5co-heading-sub" style="text-align: center">We understand you never thought of a day in court. You deserve to be satisfied knowing that your offender is punished.
                        Have a look at the court procedures.
                    </h4>

                    <div class="fh5co-spacer fh5co-spacer-sm"></div>
                </div>

            </div>
            <div class="fh5co-spacer fh5co-spacer-sm"></div>

        </div>
    </section>

    {{--<div class="loader">--}}
    {{--<div class="loader__wrapper">--}}
    {{--<div class="loader__bar">--}}
    {{--<div class="loading__bar__loader">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="post" style="background-color: #F7F9F9;" id="PP1">
        <div class="post__wrapper" >
            <div class="image">
                <div class="image__wrapper">
                    The Office of Public Prosecutions (OPP) is the team that brings charges to court when charges are laid. They also decide with the police whether to charge the perpetrator because the case would proceed to court only when there is enough evidence.
                </div>
            </div>

            <div class="post__content">
                <div class="counter">01</div>
                <h3>Reasonable chance<br/> of conviction<br/></h3>
                <p></p>

                <span class="link">
					{{--<a href="https://www.police.vic.gov.au/retrievemedia.asp?Media_ID=110945">--}}
						{{--<span>Download File</span>--}}
				{{--</a>--}}
				</span>

            </div>
        </div>
    </div>

    <div class="post" style="background-color: #FDFEFE" id="PP2">
        <div class="post__wrapper">
            <div class="image">
                <div class="image__wrapper">
                    The OPP will ask to meet you to give you information about the entire process at the court. The OPP only has the Witness Assistance Service that supports victims of crime.
                </div>
            </div>


            <div class="post__content" style="margin-right: 0px">

                <div class="counter">02</div>
                <h3>Before a<br/>court case</h3>
                <p></p>
                <span class="link">
					 <a href="#0" id="court0" class="info popup-trigger btn btn-primary btn-sm">How long it takes ?</a>
				</span>

            </div>

        </div>
    </div>

    <div class="post" style="background-color: #F7F9F9" id="PP3">
        <div class="post__wrapper">
            <div class="image">
                <div class="image__wrapper">
                    You do not have to be present when the offender pleads guilty but you can if you want. However, when the offender does not plead guilty, you will usually hasten the process by being present to give evidence. You can give evidence either by closed circuit television or in the courtroom. This is because you are the main witness to the offence.
                </div>
            </div>

            <div class="post__content">
                <div class="counter">03</div>
                <h3>Going to Court</h3>
                <p></p>
                <span class="link">
                    <a href="#0" id="court1" class="info popup-trigger btn btn-primary btn-sm">Which court?</a>
                </span>
            </div>
        </div>
    </div>

    <div class="post" style="background-color: #FDFEFE" id="PP4">
        <div class="post__wrapper">
            <div class="image">
                <div class="image__wrapper">
                    A trial is a court case that takes place before a judge and a jury at the county court. The judge tells the jury about the law.  The jury decides if the accused is guilty or not.                </div>
            </div>

            <div class="post__content">
                <div class="counter">04</div>
                <h3>Trial</h3>
                <p></p>
                <span class="link">
					<a href="#0" id="court2" class="info popup-trigger btn btn-primary btn-sm" style="margin-left: -30px">Cross-examination</a>
				</span>
            </div>
        </div>
    </div>

    <div class="post" style="background-color: #F0F3F4 " id="PP5">
        <div class="post__wrapper">
            <div class="image">
                <div class="image__wrapper">
                    Consent is a major issue at many sexual assault trials. For example, the accused may agree that sexual activity happened but say that you consented (agreed) to it.
                    When you did not say or do anything, then it is a clear indication that you did not consent to the sexual act. The judge will communicate that to the jury if relevant for the court case proceeding.
                </div>
            </div>

            <div class="post__content">
                <div class="counter">05</div>
                <h3>Consent</h3>
                <p></p>
                <span class="link">

				</span>

            </div>
        </div>
    </div>

    <div class="post" style="background-color: #FDFEFE" id="PP6">
        <div class="post__wrapper">
            <div class="image">
                <div class="image__wrapper">
                    Guilty verdict means the jury or magistrate was satisfied that the accused committed the offence and they will receive a sentence. However, if the verdict is not guilty it implies the evidence was not satisfactory. This in no sense implies that you were not telling the truth, it means the offender would not be penalized. Sometimes, the jury cannot decide. Then the case will be heard again.
                </div>
            </div>

            <div class="post__content">
                <div class="counter">06</div>
                <h3>The Verdict</h3>
                <p></p>
                <span class="link">
                    <a href="#0" id="court3" class="info popup-trigger btn btn-primary btn-sm">Sentencing</a>
				</span>

            </div>
        </div>
    </div>

    <div class="post" style="background-color: #F0F3F4 " id="PP7">
        <div class="post__wrapper">
            <div class="image">
                <div class="image__wrapper">
                    In some cases, the offender appeals the sentence. When the appeal is successful, another trial may be heard. The OPP can appeal against the sentence if they think it is too light. They cannot appeal against a not guilty verdict
                    For more information, please visit government website.
                </div>
            </div>

            <div class="post__content">
                <div class="counter">07</div>
                <h3>Appeals</h3>
                <p></p>
                <span class="link">
					{{--<a href=" https://www.legalaid.vic.gov.au/find-legal-answers/sex-and-law/sexual-assault/what-happens-court" target="_blank">--}}
						{{--<span>Visit Site</span>--}}
				{{--</a>--}}
				</span>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="fh5co-spacer fh5co-spacer-sm"></div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 clearfix fh5co-header">
                    <h4 class="h5 fh5co-heading-sub" style="text-align: center">For more information please<a href="https://www.legalaid.vic.gov.au/find-legal-answers/sex-and-law/sexual-assault/what-happens-court" target="_blank">
                            <span> visit the Victoria Legal Aid website</span>.
                        </a>
                    </h4>


                </div>

            </div>
            <div class="fh5co-spacer fh5co-spacer-sm"></div>

        </div>
    </section>


    <footer id="fh5co-footer">
        <div class="container">
            <p class="text-muted fh5co-no-margin-bottom text-center" style="padding-top: 20px">
                <small>&copy; 2018 <a href="#">Fiery Developers</a>. All rights reserved.</small>
            </p>

        </div>
    </footer>


</div>


<div class="gototop js-top">
    <a href="#0" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<div class="popup" id="courtp0" role="alert">
    <div class="popup-container">
        <a href="#0" class="popup-close img-replace">Close</a>
        <h1 style="border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px;">How long it takes.</h1>
        <p>
            The court acknowledges how hard it is for victims when this process is delayed hence gives priority to cases about sexual assault. The good news is that the OPP will notify you when the case is likely to delay.
        </p>
    </div>
</div>

<div class="popup" id="courtp1" role="alert">
    <div class="popup-container">
        <a href="#0" class="popup-close img-replace">Close</a>
        <h1 style="border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px;">Which court?</h1>
        <p>
            Offences of this nature is usually dealt with in the Magistrate’s court without a jury. The magistrate listens to the evidence, reaches a verdict and if guilty decide on a sentence. Sexual assault hearings are dealt separately from other hearings since the court acknowledges how hard it could be for victims.
        </p>
        <h2>Committal</h2>
        <p>
            If the hearing would be heard in the county court that is a court for more serious offences, a committal hearing is heard before trial. The purpose of a committal is to decide on whether the evidence provided is enough to go to the trial stage.
            When the offender pleads guilty, you do not have to give evidence.
        </p>
    </div>
</div>

<div class="popup" id="courtp2" role="alert">
    <div class="popup-container">
        <a href="#0" class="popup-close img-replace">Close</a>
        <h1 style="border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px;">Cross-examination</h1>
        <p>
            The accused’s lawyer will cross-examine your evidence however be firm and resolute in voicing out or showing your evidence. This process can be irritating because the accused’s lawyers would ask you questions that may make you feel wrong or doubted. However, there are structures that support you in being firm. The judge usually stops the accused’s lawyer from asking improper questions. In some cases, the judge pronounces the witness as a protected witness. This means that the witness cannot be cross-examined.

        </p>
        <p>
            The lawyers are binded by a code of conduct hence their questions align to the Charter of Advocacy.
        </p>
    </div>
</div>

<div class="popup" id="courtp3" role="alert">
    <div class="popup-container">
        <a href="#0" class="popup-close img-replace">Close</a>
        <h1 style="border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px;">Sentencing</h1>
        <p>
            Most people found guilty are sentence to prison or sometimes a non-custodial sentence. A non-custodial sentence is served outside prison. This is called community corrections orders.
            You are allowed to make a Victim Impact Sentence about the impact of the crime on you. This influences the sentence given to the offender.
        </p>
    </div>
</div>


<!-- Scroll1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://unpkg.com/smooth-scrolling@2.3.8/smooth-scrolling.js"></script>
<script src="/js/js/scroll1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>



<!-- jQuery -->
<script src="js/jquery-1.10.2.min.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
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
<!-- popup -->
<script type="text/javascript">
    jQuery(document).ready(function($){
        //open popup
        $('#court1').on('click', function(event){
            event.preventDefault();
            $('#courtp1').addClass('is-visible');
        });

        $('#court0').on('click', function(event){
            event.preventDefault();
            $('#courtp0').addClass('is-visible');
        });

        $('#court2').on('click', function(event){
            event.preventDefault();
            $('#courtp2').addClass('is-visible');
        });

        $('#court3').on('click', function(event){
            event.preventDefault();
            $('#courtp3').addClass('is-visible');
        });

        //close popup
        $('.popup').on('click', function(event){
            if( $(event.target).is('.popup-close') || $(event.target).is('.popup') ) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });
        //close popup when clicking the esc keyboard button
        $(document).keyup(function(event){
            if(event.which=='27'){
                $('.popup').removeClass('is-visible');
            }
        });
    });
</script>

</body>
</html>
