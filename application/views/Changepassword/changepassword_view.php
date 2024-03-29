    <!-- CONTENT START -->
    <div class="page-content">

        <br>


        <!-- OUR BLOG START -->
        <div class="section-full p-t120  p-b90 site-bg-white">
            

            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                        <div class="side-bar-st-1">
                            
                            <div class="twm-candidate-profile-pic">
                                
                                <img src="Assets/images/user-avtar/pic4.jpg" alt="">
                                <div class="upload-btn-wrapper">
                                    
                                    <div id="upload-image-grid"></div>
                                    <button class="site-button button-sm">Upload Photo</button>
                                    <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                                </div>
                                
                            </div>
                            <div class="twm-mid-content text-center">
                                <a href="candidate-detail.html" class="twm-job-title">
                                    <h4>Randall Henderson </h4>
                                </a>
                                <p>IT Contractor</p>
                            </div>
                           
                            <div class="twm-nav-list-1">
                                <ul>
                                    <li><a href="Dashboard"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                    <li><a href="Profile"><i class="fa fa-user"></i> My Profile</a></li>
                                    <li><a href="Myresume"><i class="fa fa-receipt"></i> My Resume</a></li>
 
                                    <li class="active"><a href="Changepassword"><i class="fa fa-fingerprint"></i> Change Password</a></li>
                                    <li><a href="Chat"><i class="fa fa-comments"></i>Chat</a></li>
                                </ul>
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                        <!--Filter Short By-->
                        <div class="twm-right-section-panel site-bg-gray">
                            <form method="POST" autocomplete="off" action="<?=base_url('Changepassword/cp')?>">
                                <!--Basic Information-->
                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">Change Password</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        
                                            <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Old Password</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="old_pass" type="password" placeholder="">
                                                                <i class="fs-input-icon fa fa-asterisk "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>New Password</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="new_pass" type="password" placeholder="">
                                                                <i class="fs-input-icon fa fa-asterisk"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Confirm New Password</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="confirm_pass" type="password" placeholder="">
                                                                <i class="fs-input-icon fa fa-asterisk"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    
                                                    <div class="col-xl-12 col-lg-12 col-md-12">                                  
                                                        <div class="text-left">
                                                            <button type="submit" class="site-button">Save Changes</button>
                                                        </div>
                                                    </div>                                         
                                                
                                            </div>
                                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>   
        <!-- OUR BLOG END -->
      
        
 
    </div>
    <!-- CONTENT END -->