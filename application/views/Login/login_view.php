<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thewebmax.org/jobzilla/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 11:02:38 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="Assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="Assets/images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Student Placement APP</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/lc_lightbox.css"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap-select.min.css"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="Assets/css/dataTables.bootstrap5.min.css"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="Assets/css/select.bootstrap5.min.css"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="Assets/css/dropzone.css"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/scrollbar.css"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/datepicker.css"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="Assets/css/flaticon.css"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css"><!-- MAIN STYLE SHEET -->  

</head>

<body>
    <!-- Login Section Start -->
    <div class="section-full site-bg-white">
                
        <div class="container-fluid">
            <div class="row">
        
                <div class="col-xl-4 col-lg-6 col-md-7">
                    <div class="twm-log-reg-form-wrap">
                      

                        <div class="twm-log-reg-inner">
                          
                            <div class="twm-tabs-style-2">
                                
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                    <form method="POST"  autocomplete="off" action="<?=base_url('Login/loginnow')?>">
                                        <!--Login Candidate-->
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#twm-login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                        </li>
                                        <!--Login Employer-->                       
                                                                        </ul>
                                                                        
                                                                        <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->
                                        <div class="tab-pane fade show active" id="twm-login-candidate">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="std_username" type="text"  class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                        
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="std_password" type="text" class="form-control" placeholder="Password*">
                                                    </div>
                                                </div>
                                        
                                                <div class="col-lg-12">
                                                    <div class="twm-forgot-wrap">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="Password4">
                                                                <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="forgetpassword" class="site-text-primary">Forgot Password</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="site-button">Log in</button>
                                                    </div>
                                                </div>
                                              <div>
                                               <a href=<?=base_url('Createaccount')?> > Create New Account</a>
                                              </div>
                                    </form>
                                    <?php
						if($this->session->flashdata('error')) {	?>
						 <p class="text-danger text-center" style="margin-top: 10px;"> <?=$this->session->flashdata('error')?></p>
						<?php } ?>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span class="center-text-or">Or</span>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="log_with_facebook">
                                                        <i class="fab fa-facebook"></i>
                                                        <a href="https://www.facebook.com/?stype=lo&jlou=AfdOxSw1zhCEe80731KXA2jVy3ouPWuMU0odUaOEA3KzWLPohJbRN4KfFa0bK2ut3772Pi2VkSoK-GxVXcXE7GX1tJgDja866eaVffDqTYn10g&smuh=52286&lh=Ac-unX1IAvA5yqayTyk">Continue with Facebook</a>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="log_with_google">
                                                        <img src="Assets/images/google-icon.png" alt="">
                                                        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1627445831%3A1674667093678702&authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F&ec=GAlAwAE&hl=en_GB&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession">Continue with Google</a>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <!--Login Employer Content--> 
                                    <div class="tab-pane fade" id="twm-login-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text"  class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="twm-forgot-wrap">
                                                    <div class="form-group mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password4">
                                                            <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="Forgetpassword" class="site-text-primary">Forgot Password</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="site-button">Log in</button>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span class="center-text-or">Or</span>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="log_with_facebook">
                                                        <i class="fab fa-facebook"></i>
                                                        Continue with Facebook
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="log_with_google">
                                                        <img src="Assets/images/google-icon.png" alt="">
                                                        Continue with Google
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- Login Section End -->
  
</body>
</html>