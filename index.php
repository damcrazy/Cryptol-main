<?php
	session_start();
	require_once('./Users/db_conn.php');
	//phpinfo();
    error_reporting(0);

?>


    <!DOCTYPE html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Solid Template</title>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/main.css">
        <link href="./css/bootstrap-4.4.1.css" rel="stylesheet">
        <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <link rel="icon" type="image/png" href="images/Logo.jpg.png" />

    </head>

    <body class="is-boxed has-animations">
        <div class="body-wrap">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
                <img src="./images/Logo.jpg.png">
                <a class="navbar-brand" href="./index.html">CRYPTOL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: flex;">
                    <a class="nav-link" href="./Exchange/Exchange.html">Exchange </a>
                    <a class="nav-link" href="./Getting_Started/Getting_Started.html">Getting Started </a>
                    <a class="nav-link" href="./Balance/funds.html">Balances </a>
                    <a class="nav-link" href="#">T&C</a>
                    <a class="nav-link" href="#">About Us</a>

                </div>
                <ul class="navbar-nav mr-auto thechange">
                    <li class="nav-item active"> <a class="nav-link" href="./Users/index.php">Login</a></li>
                </ul>
            </nav>

            <main>
                <section class="hero">
                    <div class="container">
                        <div class="hero-inner">
                            <div class="hero-copy">
                                <h1 class="hero-title mt-0">Crypto is the future.<br> Be ahead with Cryptol</h1>
                                <p class="hero-paragraph">With our lightning fast transaction speeds, dollar-to-crypto guarantee and 24/7 support, you know you are getting only the best</p>
                                <div class="hero-cta"><a class="button button-primary" href="./Users/signup.php">Sign Up</a><a class="button" href="#">Get started with cryptocurrency</a></div>
                            </div>
                            <div class="hero-figure anime-element">
                                <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                <rect width="528" height="396" style="fill:transparent;" />
                            </svg>
                                <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                                <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                                <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                                <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                                <div class="hero-figure-box hero-figure-box-05"></div>
                                <div class="hero-figure-box hero-figure-box-06"></div>
                                <div class="hero-figure-box hero-figure-box-07"></div>
                                <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                                <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                                <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="features section">
                    <div class="container">
                        <div class="features-inner section-inner has-bottom-divider">
                            <div class="features-wrap">
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="./images/feature-icon-01.svg" alt="Feature 01">
                                        </div>
                                        <h4 class="feature-title mt-24">BEST IN CLASS SECURITY</h4>
                                        <p class="text-sm mb-0">Being one of the top concerns for any investors, we've made sure to provide world class security for all your transactions. Get a guaranteed no-comprimise on security with our regular audits from reknowed experts
                                            across the globe.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="./images/feature-icon-02.svg" alt="Feature 02">
                                        </div>
                                        <h4 class="feature-title mt-24">LIGHTNING SPEED TRANSACTIONS</h4>
                                        <p class="text-sm mb-0">Our infrastructre is capable of handling millions of transactions simultaneously with no errors left unchecked.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="./images/feature-icon-03.svg" alt="Feature 03">
                                        </div>
                                        <h4 class="feature-title mt-24">SIMPLE & EFFICIENT DESIGN</h4>
                                        <p class="text-sm mb-0">Cryptol's simple design allows even a 5 year old to trade by intuition (Though we would not recommend it). Focus on conducting your trades and leave all the nitty gritty to us.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="./images/feature-icon-04.svg" alt="Feature 04">
                                        </div>
                                        <h4 class="feature-title mt-24">24/7 SUPPORT</h4>
                                        <p class="text-sm mb-0">Having trouble with your transactions? Reach out to us at any time to solve your issues quickly with our relaible support team.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="./images/feature-icon-05.svg" alt="Feature 05">
                                        </div>
                                        <h4 class="feature-title mt-24">DOLLAR-TO-CRYPTO GUARANTEE</h4>
                                        <p class="text-sm mb-0">We guarantee that for every Dollar's worth of crypto you buy, We have a real Dollar to back it up. We've held this for over 7 years so rest assured, Invest your money without worries.</p>
                                    </div>
                                </div>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img src="./images/feature-icon-06.svg" alt="Feature 06">
                                        </div>
                                        <h4 class="feature-title mt-24">BUILT BY BLOCKCHAIN BELIEVERS</h4>
                                        <p class="text-sm mb-0">We’re a team of hardcore traders & passionate blockchain believers. We understand exactly what you need. Powerful graphs, Security, Simplistic design and Convinience ; It's all here at Cryptol</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pricing section">
                    <div class="container-sm">
                        <div class="pricing-inner section-inner">
                            <div class="pricing-header text-center">
                                <h2 class="section-title mt-0">Cryptol offers only the best</h2>
                                <p class="section-paragraph mb-0">We offer only the best in Security, Speed and Sophistication. Wanna know something even better? Cryptol is completely free to use. No Overheads, No Hidden charges. Join us today and experience the world of cryptocurrencies
                                    at its finest.</p>
                            </div>
                            <div class="pricing-tables-wrap">
                                <div class="pricing-table">
                                    <div class="pricing-table-inner is-revealing">
                                        <div class="pricing-table-main">
                                            <img src="./images/Mockup.png">

                                        </div>
                                        <div class="pricing-table-cta mb-8">
                                            <a class="kolClass" href="./Users/signup.php">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span> Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cta section">
                    <div class="container">
                        <div class="cta-inner section-inner">
                            <h3 class="section-title mt-0">Reach out to our reliable 24/7 Support.</h3>
                            <div class="cta-cta">
                                <a class="button button-primary button-wide-mobile" href="#">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="site-footer">
                <div class="container">
                    <div class="site-footer-inner">
                        <div class="brand footer-brand">
                            <a href="#">
                                <img class="header-logo-image" src="./images/logo.svg" alt="Logo">
                            </a>
                        </div>
                        <ul class="footer-links list-reset">
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">FAQ's</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                        <ul class="footer-social-links list-reset">
                            <li>
                                <a href="https://youtu.be/xvFZjo5PgG0">
                                    <span class="screen-reader-text">Facebook</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"
                                        fill="#0270D7" />
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://youtu.be/xvFZjo5PgG0">
                                    <span class="screen-reader-text">Twitter</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"
                                        fill="#0270D7" />
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://youtu.be/xvFZjo5PgG0">
                                    <span class="screen-reader-text">Google</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z"
                                        fill="#0270D7" />
                                </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="footer-copyright">&copy; 2060 Cryptol, all rights reserved</div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="./js/main.min.js"></script>
    </body>


    <script>
        function change() {
            document.getElementsByClassName("thechange")[0].innerHTML = "<div class='dropdown'><button class='dropbtn'><?php echo $_SESSION['name']; ?></button><div class='dropdown-content'><a class='logout' href='./Users/logout.php'>Log out</a></div></div>"
        }
    </script>

    <?php
if ($_SESSION['loggedin'] == "TRUE")
{
echo '<script>',
'change();',
 '</script>';
}
else
echo '<script></script>';


?>

    </html>