<!DOCTYPE html>
<html lang="en">
<?php require_once 'head.php'; ?>
<body class="<?php if (isset($_COOKIE['id']) && !empty($_COOKIE['id'])){ echo 'logged-in';} ?>">
<header id="header">
    <div class="header-wrapper container row">
        <div class="header-left">
            <img src="images/logo.png" alt="Logo" class="logo-stm">
        </div>
        <div class="header-center">
            <ul class="main-menu">
                <li class="menu-item"><a href="#">Home</a></li>
                <li class="menu-item"><a href="#">Services</a></li>
                <li class="menu-item"><a href="#">Portfolio</a></li>
                <li class="menu-item"><a href="#">Pages</a></li>
                <li class="menu-item"><a href="#">Shop</a></li>
                <li class="menu-item"><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="header-right">
            <button class="cart-button"><img src="images/icon_Cart.png" class="cart-icon">Cart</button>
            <button class="login">Login</button>
            <div class="side-menu"><img src="images/hamburger_menu.png" class="side-menu-icon"></div>
        </div>
    </div>
</header>
<div id="main" class="main">
    <div class="first-row">
        <div class="first-row-wrapper container row">
            <div class="col-6">
                <h1 class="site-heading">
                    Darryl Gover
                    <span class="heading-inner">MMA Trainer</span>
                </h1>
                <p class="descr">
                    Self defense, self confidence,
                    discipline and emotional self control
                </p>
                <div class="col-8">
                    <div class="services-wrapper">
                        <div class="service"><span class="service-text">Featured Classes</span></div>
                        <div class="service"><span class="service-text">Book an appointment</span></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="images/firstimg2.png" class="first-img">
            </div>
        </div>
    </div>
    <div class="second-row">
        <div class="container row">
            <div class="col-3">
                <h2 class="second-heading">
                    Our classes
                </h2>
                <p class="second-descr">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                </p>
            </div>
            <div class="col-9">
                <div class="classes-row row">
                    <div class="class-item">
                        <h4 class="class-name">
                            Sunday Boxing classes
                        </h4>
                    </div>
                    <div class="class-item">
                        <h4 class="class-name">
                            Kickboxing classes
                        </h4>
                    </div>
                    <div class="class-item">
                        <h4 class="class-name">
                            Cross fitness classes
                        </h4>
                    </div>
                    <div class="nav-buttons">
                        <button class="prev"><img src="images/leftarrow.png" class="prev-img"></button>
                        <button class="next"><img src="images/rightarrow.png" class="next-img"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="third-row">
        <div class="container row">
            <div class="col-4">
                <div class="triggers-wrap">
                    <div class="third-icon"><img src="images/clock.png" class="icon"></div>
                    <div class="third-heading-block">
                        <h3 class="third-heading">Working hours</h3>
                        <h5 class="third-subheading">Everyday 5 am to 9 pm</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="triggers-wrap">
                    <div class="third-icon"><img src="images/phoneicon.png" class="icon"></div>
                    <div class="third-heading-block">
                        <h3 class="third-heading">Call for any query</h3>
                        <h5 class="third-subheading"><a href="tel:9999999999" class="telephone">9999 - 999 - 999</a><br><a
                                href="tel:8888888888" class="telephone">8888 - 888 - 888</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="triggers-wrap">
                    <div class="third-icon"><img src="images/addressicon.png" class="icon"></div>
                    <div class="third-heading-block">
                        <h3 class="third-heading">Address</h3>
                        <h5 class="third-subheading">9358 Cottage St. Fairburn, GA 30213</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fourth-row">
        <div class="container row">
            <div class="col-6">
                <h2 class="fourth-heading">About Darryl Gover</h2>
                <h5 class="fourth-subheading">Self defense, self confidence,
                    discipline and emotional self control
                </h5>
                <p class="fourth-descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempoar
                    incidid unt ut labore et dolore magna aliqua. cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat.</p>
                <p class="fourth-descr"> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                    qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <div class="social-block row">
                    <div class="col-3">
                        <img src="images/sign.png" class="sign">
                    </div>
                    <div class="col-4">
                        <div class="socials row">
                            <img src="images/fb.png" class="social-img">
                            <img src="images/tw.png" class="social-img">
                            <img src="images/in.png" class="social-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="video-block">
                    <button class="video-button"><img src="images/playbutton2.png"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="fifth-row">
        <div class="container row">
            <div class="col-5">
                <img src="images/formimg.png" class="form-img">
            </div>
            <div class="col-6">
                <form class="form">
                    <h2 class="form-heading">30 DAY FREE TRIAL</h2>
                    <p class="form-descr">Sign up for your free 3-day trial today! All of you are welcome</p>
                    <div class="row">
                        <div class="col-12"><input type="text" name="yourname" id="name" placeholder="Your name"></div>
                        <div class="col-6"><input type="email" name="youremail" id="email" placeholder="Your email">
                        </div>
                        <div class="col-6"><input type="tel" name="yourtel" id="phone" placeholder="Your phone number">
                        </div>
                    </div>
                    <h6 class="prefer-course">The courses you prefer</h6>
                    <div class="checkboxes row">
                        <div class="sport-courses">
                            <img src="images/boxing.png" class="sport-img">
                            <p class="sport-descr">Boxing</p>
                        </div>
                        <div class="sport-courses">
                            <img src="images/karate.png" class="sport-img">
                            <p class="sport-descr">Karate</p>
                        </div>
                        <div class="sport-courses">
                            <img src="images/fitness.png" class="sport-img">
                            <p class="sport-descr">Cross fitness</p>
                        </div>
                        <div class="sport-courses">
                            <img src="images/other.png" class="sport-img">
                            <p class="sport-descr">Others</p>
                        </div>
                        <input type="hidden" value="box" class="custom-box">
                        <input type="hidden" value="karate" class="custom-box">
                        <input type="hidden" value="cross" class="custom-box">
                        <input type="hidden" value="other" class="custom-box">
                    </div>
                    <button class="submit">Start your free trial</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="overlay">
    <div class="video-modal">
        <div class="video-inner row">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kgvH6tX4Ej0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="form-popup">
        <div class="form-inner row container">
            <div class="col-6">
                <h4 class="message">You have submitted the form successfully!</h4>
                <div class="your-name">Your name:</div>
                <div class="your-email">Your email:</div>
                <div class="your-phone">Your phone:</div>
                <div class="preferred-course">Preferred course:</div>
            </div>
            <div class="col-6">
                <div class="name-value"></div>
                <div class="email-value"></div>
                <div class="phone-value"></div>
                <div class="course-value"></div>
            </div>
                
        </div>
    </div>
</div>

<script src="assets/js/scripts.js"></script>
</body>
</html>