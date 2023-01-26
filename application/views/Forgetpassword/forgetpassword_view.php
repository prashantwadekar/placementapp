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

                                    <form method="POST"  autocomplete="off" action="<?=base_url('Forgetpassword/forgetpassword')?>">
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
                                                        <input name="std_email" type="text"  class="form-control" placeholder="Enter Email*">
                                                    </div>
                                                </div>
                                        
                                              
                                        
                                                <div class="col-lg-12">
                                                    <div class="twm-forgot-wrap">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check">
                                                               
                                                                <a href="Login" class="site-text-primary">Back to Sign in</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="site-button">Next</button>
                                                    </div>
                                                </div>
                                            
                                    </form>
                                    <?php
						if($this->session->flashdata('error')) {	?>
						 <p class="text-danger text-center" style="margin-top: 10px;"> <?=$this->session->flashdata('error')?></p>
						<?php } ?>
                  
                                            
                                            
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