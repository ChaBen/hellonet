<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$pair) {
	$pair = 'EURUSD';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hello Networks111</title>
        <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"><img src="/assets/img/navbar-logo.svg" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#API">API</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">FOREX JSON API</div>
                <div class="masthead-heading text-uppercase">24 / 7 / 365 fresh data</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Detail ..</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Services</h2>
                    <h3 class="section-subheading text-muted">Our service is very demanded by some industries. Know some of them.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-exchange-alt fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Multi-currency</h4>
                        <p class="text-muted">The Main Currency Pairs are featured on Hello Networks. EUR/USD GBP/USD EUR/JPY USD/JPY EUR/GBP .. many pairs</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-coins fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Crypto Currency Pair</h4>
                        <p class="text-muted">BTC/USD ETH/USD XRP/USD LTC/USD Everything updated every second.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-dice fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">GAMING & CASINOS</h4>
                        <p class="text-muted">Who use our quotes to build their Forex Binary & other kind of Games.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- API Grid-->
        <section class="page-section bg-light" id="API">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading">API Data</h2>
                    <h3 class="section-subheading text-muted">Fresh realtime data - line chart</h3>
                </div>


                <div class="row">
                    <div class="col-xs-6 col-md-4">
					<select multiple class="form-control" style="height:350px;" onchange="window.open(value,'_self');">
<?php
switch($pair) {
	case 'EURUSD':
		$eurusdsel = 'SELECTED';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'GBPUSD':
		$eurusdsel = '';
		$gbpusdsel = 'SELECTED';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'EURJPY':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = 'SELECTED';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'USDJPY':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = 'SELECTED';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'USDCHF':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = 'SELECTED';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'AUDUSD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = 'SELECTED';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'AUDUSD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = 'SELECTED';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'USDCAD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = 'SELECTED';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'EURGBP':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = 'SELECTED';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'EURAUD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = 'SELECTED';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'USDCNY':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = 'SELECTED';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'GBPJPY':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = 'SELECTED';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'GBPAUD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = 'SELECTED';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'AUDJPY':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = 'SELECTED';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'GBPCAD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = 'SELECTED';
		$btcusdsel = '';
		$ethusdsel = '';
		break;
	case 'BTCUSD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = 'SELECTED';
		$ethusdsel = '';
		break;
	case 'ETHUSD':
		$eurusdsel = '';
		$gbpusdsel = '';
		$eurjpysel = '';
		$usdjpysel = '';
		$usdchfsel = '';
		$audusdsel = '';
		$usdcadsel = '';
		$eurgbpsel = '';
		$euraudsel = '';
		$usdcnysel = '';
		$gbpjpysel = '';
		$gbpaudsel = '';
		$audjpysel = '';
		$gbpcadsel = '';
		$btcusdsel = '';
		$ethusdsel = 'SELECTED';
		break;
}
?>
					  <option <?=$eurusdsel;?> value="?currency=EURUSD#API">EUR/USD</option>
					  <option <?=$gbpusdsel;?> value="?currency=GBPUSD#API">GBP/USD</option>
					  <option <?=$eurjpysel;?> value="?currency=EURJPY#API">EUR/JPY</option>
					  <option <?=$usdjpysel;?> value="?currency=USDJPY#API">USD/JPY</option>
					  <option <?=$usdchfsel;?> value="?currency=USDCHF#API">USD/CHF</option>
					  <option <?=$audusdsel;?> value="?currency=AUDUSD#API">AUD/USD</option>
					  <option <?=$usdcadsel;?> value="?currency=USDCAD#API">USD/CAD</option>
					  <option <?=$eurgbpsel;?> value="?currency=EURGBP#API">EUR/GBP</option>
					  <option <?=$euraudsel;?> value="?currency=EURAUD#API">EUR/AUD</option>
					  <option <?=$usdcnysel;?> value="?currency=USDCNY#API">USD/CNY</option>
					  <option <?=$gbpjpysel;?> value="?currency=GBPJPY#API">GBP/JPY</option>
					  <option <?=$gbpaudsel;?> value="?currency=GBPAUD#API">GBP/AUD</option>
					  <option <?=$audjpysel;?> value="?currency=AUDJPY#API">AUD/JPY</option>
					  <option <?=$gbpcadsel;?> value="?currency=GBPCAD#API">GBP/CAD</option>
					  <option <?=$btcusdsel;?> value="?currency=BTCUSD#API">BTC/USD</option>
					  <option <?=$ethusdsel;?> value="?currency=ETHUSD#API">ETH/USD</option>
					</select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8">
						<div id="container" style="width: 100%; height: 400px"></div>
                    </div>
                </div>


			</div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About FOREX MARKET</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part<br />Of Our<br />Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="/assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="/assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="/assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="/assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Hello Networks 2019-2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Privacy Policy</a><a href="#!">Terms of Use</a></div>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="/assets/mail/jqBootstrapValidation.js"></script>
        <script src="/assets/mail/contact_me.js"></script>
        <script src="/js/scripts.js"></script>
	    <script src="/js/highcharts.js"></script>
		<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
		<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/stock/themes/grid-light.js"></script>
        <script>
            Highcharts.setOptions({
                global: {
                    useUTC: true
                }
            });
           
            var chart;
            function requestData() {
                $.ajax({
                    url: '/data.php',
                    success: function (point) {
                        var series = chart.series[0],
                            shift = series.data.length > 20;
                       
                        // console.log(point);
                       
                        var timestamp = point[0];
                        var date = new Date(timestamp);
                        // console.log(date);
                           
                        chart.series[0].addPoint(point, true, shift);
                       
                        setTimeout(requestData, 1000);
                    },
                    cache: false
                });
            }
           
            $(function () {
                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container',
                        defaultSeriesType: 'line',
                        events: {
                            load: requestData
                        }
                    },
                    title: {
                        text: '<?=$pair;?>'
                    },
                    xAxis: {
                        type: 'datetime',
                        tickPixelInterval: 30,
                        maxZoom: 20 * 1000
                    },
                    yAxis: {
                        minPadding: 0.2,
                        maxPadding: 0.2,
                        title: {
                            text: 'Value',
                            margin: 10
                        }
                    },
                    series: [{
                        name: '<?=$pair;?>',
                        data: []
                    }]
                });
            });
        </script>
    </body>
</html>
