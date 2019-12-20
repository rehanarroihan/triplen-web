<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google sign in needs -->
    <meta name="google-signin-client_id" content="342542727629-fh57sa47vtueellcf7nee05f4rq00cjr.apps.googleusercontent.com">
    <title>Triplen | Rencanakan Perjalananmu</title>
    <meta name="description" content="">
    <script src="<?php echo base_url() ?>assets/front/themekit/scripts/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/front/themekit/scripts/main.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/bootstrap-grid.css">
    <script src="https://kit.fontawesome.com/509c6b244a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/glide.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/content-box.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/contact-form.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/media-box.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/social.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/skin.css">
    <link rel="icon" href="<?php echo base_url() ?>assets/front/media/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/constant.js"></script>
</head>

<body>
    <div id="preloader"></div>
    <nav class="menu-classic menu-fixed menu-transparent menu-one-page align-right" data-menu-anima="fade-bottom"
        data-scroll-detect="true">
        <div class="container">
            <div class="menu-brand">
                <a href="#">
                    <img class="logo-default" src="<?php echo base_url() ?>assets/front/media/logo-dark.svg" alt="logo" />
                    <img class="logo-retina" src="<?php echo base_url() ?>assets/front/media/logo-dark.svg" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul>
                    <li>
                        <a href="#overview">Overview</a>
                    </li>
                    <li>
                        <a href="#features">Features</a>
                    </li>
                    <li>
                        <a href="#community">Community</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#news">News</a>
                    </li>
                </ul>
                <div class="menu-right">
                    <div class="menu-custom-area">
                        <a class="btn btn-xs btn-circle" href="#">Sign up</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
    <main>
        <section class="section-base section-full-width-right">
            <div class="container">
                <hr class="space" />
                <div class="row">
                    <div class="col-lg-6">
                        <hr class="space-lg hidden-md" />
                        <h1>
                            Discover amazing trips around the world.
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboriso.
                        </p>
                        <div class="g-signin2 btn btn-sm btn-circle full-width-sm" id="goGoogle" data-onsuccess="onSignIn">
                            <i class="fab fa-google"></i>&emsp;Login with google
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <hr class="space visible-md" />
                        <img class="width-min-835" src="<?php echo base_url() ?>assets/front/media/travel/travel-1.svg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section id="overview" class="section-base">
            <div class="container">
                <hr class="space-lg" />
                <h2 class="align-center width-650">Travel app empowers experience focused vacations with tools that make
                    every travel more exciting and amazing.</h2>
                <hr class="space-lg" />
                <hr class="space" />
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                        <h2>Trusted all over the world <br />by a wide range of travel bloggers.</h2>
                        <p>
                            Lorem ipsum dolor sit ametno sea takimata sanctus est Lorem ipsum dolor sit amete.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco sea takimata sanctus eslaboriso.
                            Aipsum dolor sito.
                        </p>
                        <a href="#" class="btn-text">Explore services</a>
                    </div>
                    <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                        <img src="<?php echo base_url() ?>assets/front/media/phone-11.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="section-base section-color">
            <div class="container">
                <h2 class="align-center align-left-sm">We believe in the user experience.</h2>
                <p class="width-650 align-center align-left-sm">
                    Lorem ipsum dolor sit amet no sea takimata sanctus est Lorem ipsum dolor sit amete
                    sare nostrud exercitation ullamco sea takiquis nostrud exercitatio.
                </p>
                <hr class="space" />
                <div class="grid-list gap-60" data-columns="3" data-columns-md="2" data-columns-sm="1">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-eci-icon"></i>
                                <div class="caption">
                                    <h2>Green features</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmod tempore arto seo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-elephant"></i>
                                <div class="caption">
                                    <h2>Safari trips</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmodore arte tempore marcollo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-edit-map"></i>
                                <div class="caption">
                                    <h2>Real time updates</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmodo marcopolo tempore.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-cancer-2"></i>
                                <div class="caption">
                                    <h2>Restaruants and food</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmo temporenao.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-d-eyeglasses2"></i>
                                <div class="caption">
                                    <h2>Events and parties</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmod tempore ascologo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-lock-user"></i>
                                <div class="caption">
                                    <h2>Security features</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmod tempore petrullio.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-cool-guy"></i>
                                <div class="caption">
                                    <h2>Premium support</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmod tempore gatto.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-laptop-3"></i>
                                <div class="caption">
                                    <h2>Cross platform</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmod tempore pardo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-side-icon">
                                <i class="im-lock-user"></i>
                                <div class="caption">
                                    <h2>Security features</h2>
                                    <p>
                                        Lorem ipsum dolor sitamet consect sed do eiusmod tempore.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-pagination">
                        <ul class="pagination align-center" data-page-items="6" data-pagination-anima="fade-bottom">
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-image align-center light" style="background-image:url('<?php echo base_url() ?>assets/front/media/bg.svg')">
            <div class="container">
                <h2>Get the app now.</h2>
                <p class="width-650">
                    Lorem ipsum dolor sit amet no sea takimata sanctus est Lorem ipsum dolor sit amete
                    sare nostrud exercitation ullamco dolore eu fugiat nulla pariature.
                </p>
                <hr class="space-sm">
                <a class="btn-store" href="#"><img src="<?php echo base_url() ?>assets/front/media/store-google.png" alt=""></a>
                <a class="btn-store" href="#"><img src="<?php echo base_url() ?>assets/front/media/store-apple.png" alt=""></a>
            </div>
        </section>
        <section id="community" class="section-base section-full-width-left section-bottom-layer section-color-layer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-anima="fade-left" data-time="1000">
                        <img class="width-min-835" src="<?php echo base_url() ?>assets/front/media/travel/travel-2.svg" alt="" />
                    </div>
                    <div class="col-lg-6" data-anima="fade-right" data-time="1000">
                        <h2>We are helping many <br />local communites and villages.</h2>
                        <p>
                            Lorem ipsum dolor sit amet no sea takimata sanctus est Lorem ipsum dolor sit amete
                            sare nostrud exercitation ullamco dolore eu fugiat nulla pariature sitame consect sed do
                            eiusmod tempore pardo.
                        </p>
                        <hr class="space-sm" />
                        <ul class="icon-list icon-circle icon-list-11">
                            <li>Lorem ipsum dolor sit ameteminim veniam amoartes.</li>
                            <li>Lorem exercitation ipsum dolor sittakimata amete magna doloros.</li>
                            <li>Aullamco ipsum dolor sit amete sanctus artes.</li>
                            <li>Aullamco ipsum dolor sitare amete magna magna.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <h2 class="align-center">Let's start with a bang.</h2>
                <p class="align-center width-650">
                    Lorem ipsum dolor sit amet no sea takimata sanctus est Lorem ipsum dolor sit amete
                    sare nostrud exercitation ullamco dolore eu fugiat nulla pariature.
                </p>
                <hr class="space" />
                <div class="box-steps">
                    <div class="step-item">
                        <span>1</span>
                        <div class="content">
                            <h3>Download the app</h3>
                            <div>
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="step-item">
                        <span>2</span>
                        <div class="content">
                            <h3>Register</h3>
                            <div>
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="step-item">
                        <span>3</span>
                        <div class="content">
                            <h3>Book your trip</h3>
                            <div>
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="footer-parallax light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h4>Company and team</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="#">Company details and team</a>
                            </li>
                            <li>
                                <a href="#">News and blog</a>
                            </li>
                            <li>
                                <a href="#">Press area</a>
                            </li>
                            <li>
                                <a href="#">Affiliates and marketing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Help and support</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="#">Help centre</a>
                            </li>
                            <li>
                                <a href="#">Feedbacks</a>
                            </li>
                            <li>
                                <a href="#">Request new features</a>
                            </li>
                            <li>
                                <a href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Learn more</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="#">Apps stores</a>
                            </li>
                            <li>
                                <a href="#">Partners</a>
                            </li>
                            <li>
                                <a href="#">Privacy and terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Follow us</h4>
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="linkedin"><i class="icon-linkedin"></i></a>
                        <a class="youtube"><i class="icon-youtube"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© Codrop LTD 2019. Codrop is a powerful Landing Page App Template built with <a target="_blank"
                        href="https://themekit.dev/code/">Themekit</a> by the <a target="_blank"
                        href="https://schiocco.com/">Schiocco</a> Team. </span>
                <span><img src="<?php echo base_url() ?>assets/front/media/logo-light.svg" alt="" /></span>
            </div>
        </div>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/media/icons/iconsmind/line-icons.min.css">
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/parallax.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/glide.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/magnific-popup.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/tab-accordion.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/imagesloaded.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/contact-form/contact-form.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/progress.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/pagination.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/themekit/scripts/social.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/media/custom.js"></script>

        <!-- Custom -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </footer>
</body>
<script>
$('#googleLogin').click(function() {
    $('#goGoogle').click();
});

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  const regData = {
    id_google: profile.getId(),
    email: profile.getEmail(),
    name: profile.getName(),
    image: profile.getImageUrl()
  };
  axios.post(apiBaseURL + 'user/auth', regData)
  .then((res) => {
    if (res.data.data === null) {
        window.location = appBaseURL + 'register';
    } else {
        window.location = appBaseURL + 'app';
    }
  });
}
</script>
</html>