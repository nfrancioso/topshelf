@extends('frontend.layout')

@section('content')
<!--==========================
  Hero Section
============================-->
<section id="hero">
  <div class="hero-container">
    <h1>Better Resume | Better Job</h1>
    <h2 class="white typed">Let's help you land that dream interview.</h2><span class="typed-cursor">|</span><br><br>
    <a href="#about" class="btn-get-started">Learn More</a>
  </div>
</section><!-- #hero -->

<main id="main">

  <!--==========================
    About Us Section
  ============================-->
  <section id="about">
    <div class="container">
      <div class="section-header">
        <h3 class="section-title">About</h3>
        <div class="separator separator-grey">♦</div>
        <p class="section-description">Our web-based automated tool anlyzes your resume against a potential job description for keyword match, job title, education/certifications, quality of words, tones and more. Wheter you are a student entering the job market or a professional seeking your next endeavor our tool will help increase your chances of landing that dream interview.</p>
      </div>
      <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-duration="500ms">
            <div class="box">
              <div class="icon"><a><i class="fa fa-wifi"></i></a></div>
            <h4 class="title">Is it Easy?</h4>
            <p class="description">Yes, Absolutely! We have built a simple process where you only need to paste or upload your resume and our application will do the rest. No technical experience required!</p>
          </div>
        </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
            <div class="box">
              <div class="icon"><a><i class="fa fa-wifi"></i></a></div>
            <h4 class="title">Why use us?</h4>
            <p class="description">We continue to research Application Tracking Systems and develop ways to get your resume to the top of the list and better your chance of getting hired.</p>
          </div>
        </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
            <div class="box">
              <div class="icon"><a><i class="fa fa-wifi"></i></a></div>
            <h4 class="title">How Does it work</h4>
            <p class="description">We have built a very powerful data analytics tool that processes hundreds of thousands of active jobs to build a database of keywords you should include on your resume.</p>
          </div>
        </div>

      </div>
      </div>
  </section><!-- #about -->
  <!--==========================
    Facts Section
  ============================-->
  <section id="facts">
    <div class="container wow fadeIn">
      <div class="section-header">
        <!-- <h3 class="section-title">Facts</h3> -->
        <!-- <div class="separator separator-grey">♦</div> -->
        <!-- <p class="section-description">We are a transparent company and therfor share with you our key performance indicators.</p> -->
      </div>
        <div class="row stats-row">

          <div class="stats-col text-center col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">78</span> Happy Clients
            </div>
          </div>

            <div class="stats-col text-center col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
              <div class="circle">
                <span class="stats-no" data-toggle="counter-up">96</span><spacn>%</span> Positive Feedback
              </div>
            </div>

              <div class="stats-col text-center col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                <div class="circle">
                  <span class="stats-no" data-toggle="counter-up">213</span> Resumes Processed
                </div>

              </div>
                <div class="stats-col text-center col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                  <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">14,234</span> Keywords Processed
                  </div>
                </div>
      </div>
  </section><!-- #facts -->
  <!--==========================
  Call To Action Section
  ============================-->
  <section id="call-to-action">
    <div class="container wow fadeIn">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Get Started</h3>
          <p class="cta-text"> Are you ready to begin the process of improving your resume.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#get-started">Get Started</a>
        </div>
      </div>

    </div>
  </section><!-- #call-to-action -->
  <!--==========================
    Get Started
  ============================-->
  <section id="get-started">
    <div class="container wow fadeInUp">

      <div class="section-header">
        <h3 class="section-title">Try Us Out</h3>
        <div class="separator separator-grey">♦</div>
        <p class="section-description">Paste the text from your resume into the box to the left and then paste the text from the potential job description into the box to the right and click submit.</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
            <h4>Step 1: Paste your Resume below.</h4>
            <div class="form-group">
              <textarea id="cvTxt" class="form-control" name="cvTxt" rows="10" data-rule="required" data-msg="Paste or Upload Resume...." placeholder="Paste or Upload Resume...."></textarea>
              <a id="clearCV" href="#get-started" onclick="javascript:clearCV();"><i class="fa fa-trash"></i> Clear Resume</a>
          </div>
        </div>

        <div class="col-lg-6">
            <h4>Step 2: Paste Job Description below.</h4>
            <div class="form-group">
              <textarea id="jdTxt" class="form-control" name="jdTxt" rows="10" data-rule="required" data-msg="Paste Job Description here...." placeholder="Paste Job Description here...."></textarea>
              <a id="clearJd" href="#get-started" onclick="javascript:clearJd();"><i class="fa fa-trash"></i> Clear Job Description</a>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-4">
          </div>

        <div class="section-header col-lg-4">
          <a href="{{ request()->url() }}" class="btn-scanner">@lang('Submit')</a>
          <i><center>(no software or download reqired)</i>
        </div>

        <div class="col-lg-4">
        </div>

      </div>
    </div>
  </section><!-- #start -->
  <!--==========================
  Got Questions Section
  ============================-->
  <section id="got-questions">
    <div class="container wow fadeIn">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Still got Questions?</h3>
          <p class="cta-text"> We have put together a comprehensive list of frequently asked questions and tutorials for your reading pleasure.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#faq">FAQ & Tutorials</a>
        </div>
      </div>

    </div>
  </section><!-- #got-questions -->

  <!--==========================
    Team Section
  ============================-->
  <!-- <section id="team">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Team</h3>
        <div class="separator separator-grey">♦</div>
        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
             <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->

  <!--==========================
   Join our Team
  ============================-->
  <!-- <section id="join-our-team">
    <div class="container wow fadeIn">
      <div class="section-header">
        <h3 class="section-title">Join our Team.</h3>
        <div class="separator separator-grey">♦</div>
        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="box">
            <div class="icon"><a ><i class="fa fa-wifi"></i></a></div>
            <h4 class="title"><a >Remote Work</a></h4>
            <p class="description">Freedom to work anywhere, we even pay your internet bill.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a ><i class="fa fa-bar-chart"></i></a></div>
            <h4 class="title"><a >Unlimited Time-Off</a></h4>
            <p class="description">Take as many days off as you need, we work work hard so we enjoy our time-off.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="box">
            <div class="icon"><a ><i class="fa fa-graduation-cap"></i></a></div>
            <h4 class="title"><a >Education</a></h4>
            <p class="description">A culture set around personal growth and learning. We provide an allowance every year to use on continuning education.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a ><i class="fa fa-handshake-o"></i></a></div>
            <h4 class="title"><a >Volunteer</a></h4>
            <p class="description">We have a network of volunteer initiatives where we give back to the communities.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="box">
            <div class="icon"><a ><i class="fa fa-users"></i></a></div>
            <h4 class="title"><a >Team Building</a></h4>
            <p class="description">We have once a year, company paid, one week long team building events where all employees travel to one location.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="box">
            <div class="icon"><a ><i class="fa fa-desktop"></i></a></div>
            <h4 class="title"><a >Equipment</a></h4>
            <p class="description">We supply all equipment, wheter your a mac lover or windows fan we send you all required hardware including a desk and chair.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Contact Us</h3>
        <div class="separator separator-grey">♦</div>
        <p class="section-description">Please dont hesitate to contact us with questions, concerns or the winning lottery numbers!</p>
      </div>
    </div>

    <div id="google-map" data-latitude="28.5383355" data-longitude="-81.37923649999999"></div>

    <div class="container wow fadeInUp">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>500 Adam Street<br>Oraldno, FL</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@topshelf.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 111 222 1234</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #contact -->

</main>

@if ($errors->has('log'))
<script>
$(function() {
    $('#modal').modal('show');
});
</script>
@endif

<!-- Modal HTML Markup -->
<div id="modal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="logincard">
            	<div class="pmd-card card-default pmd-z-depth">
          		<div class="login-card">
          			<form>
          				<div class="pmd-card-title card-header-border text-center">
          					<div class="loginlogo">
          						<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
          					</div>
          					<h3>Sign In <span>with <strong>PROPELLER</strong></span></h3>
          				</div>

          				<div class="pmd-card-body">
          					<div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>
                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                  <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                                      <input type="text" class="form-control" id="exampleInputAmount">
                                  </div>
                              </div>

                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                  <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                                      <input type="text" class="form-control" id="exampleInputAmount">
                                  </div>
                              </div>
                          </div>
          				<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
          					<div class="form-group clearfix">
          						<div class="checkbox pull-left">
          							<label class="pmd-checkbox checkbox-pmd-ripple-effect">
          								<input type="checkbox" checked="" value="">
          								<span class="pmd-checkbox"> Remember me</span>
          							</label>
          						</div>
          						<span class="pull-right forgot-password">
          							<a href="javascript:void(0);">Forgot password?</a>
          						</span>
          					</div>
          					<a href="index.html" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Login</a>

          					<p class="redirection-link">Don't have an account? <a href="javascript:void(0);" class="login-register">Sign Up</a>. </p>

          				</div>

          			</form>
          		</div>

          		<div class="register-card">
          			<div class="pmd-card-title card-header-border text-center">
          				<div class="loginlogo">
          					<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
          				</div>
          				<h3>Sign Up <span>with <strong>PROPELLER</strong></span></h3>
          			</div>
          			<form>
          			  <div class="pmd-card-body">

                        	<div class="form-group pmd-textfield pmd-textfield-floating-label">
                                  <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                                      <input type="text" class="form-control" id="exampleInputAmount">
                                  </div>
                              </div>

                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                  <label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                                      <input type="text" class="form-control" id="exampleInputAmount">
                                  </div>
                              </div>

                              <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                  <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                                      <input type="text" class="form-control" id="exampleInputAmount">
                                  </div>
                              </div>
                        </div>

          			  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
          				<a href="index.html" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Sign Up</a>
          			  	<p class="redirection-link">Already have an account? <a href="javascript:void(0);" class="register-login">Sign In</a>. </p>
          			  </div>
          			</form>
          		</div>

          		<div class="forgot-password-card">
          			<form>
          			  <div class="pmd-card-title card-header-border text-center">
          				<div class="loginlogo">
          					<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
          				</div>
          				<h3>Forgot password?<br><span>Submit your email address and we'll send you a link to reset your password.</span></h3>
          			</div>
          			  <div class="pmd-card-body">
          					<div class="form-group pmd-textfield pmd-textfield-floating-label">
                                  <label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
                                  <div class="input-group">
                                      <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                                      <input type="text" class="form-control" id="exampleInputAmount">
                                  </div>
                              </div>
          				</div>
          			  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
          			  	<a href="index.html" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Submit</a>
          			  	<p class="redirection-link">Already registered? <a href="javascript:void(0);" class="register-login">Sign In</a></p>
          			  </div>
          			</form>
          		</div>
          	</div>
          </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
