<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <script>
        var base_path="<?php echo base_url();?>";
     </script>
    
    </head>
<body>
     <!--Model Popup Section Start-->
            <!--Signup popup -->
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <form action="" id="Form" method="POST">

                            <div class="modal-body ">
                                <div class="twm-tabs-style-2" >
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!--Signup Candidate-->  
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                    </li>
                                 
                                    
                                    </ul>
                                
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="std_prn" id="std_prn" type="text"  class="form-control" placeholder="PRN Number*" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="std_username" id="std_username" type="text"  class="form-control" placeholder="Usearname*" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="std_password" id="std_password" type="password" class="form-control"  placeholder="Password*" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="std_email" id="std_email" type="text" class="form-control"  placeholder="Email*" required>
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="std_phone" id="std_phone" type="text" class="form-control"  placeholder="Phone*" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <a class="twm-backto-login" href="Login" style="color: blue;" >Log in here</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" name="btn_save" id="btn_save" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                        

                        </form>
                        <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                    </div>
                </div>        
</body>
<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>   
<script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>       
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/Createaccount_create.js"></script>

</html>