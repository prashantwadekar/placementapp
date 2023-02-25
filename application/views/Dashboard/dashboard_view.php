<style>
.twm-candidate-profile-pic img {
    border-radius: 10px;
    margin: 0px;
    display: block;
    width: 70px;
    /* margin-top: -48px; */
    margin-bottom: 3px;
    margin-left: 23px;
}
</style>
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
        <div class="class">
            <br/>
        </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">
                

                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                            <div class="side-bar-st-1">
                                
                                <div class="twm-candidate-profile-pic">
                                                                    
                                    <div class="upload-btn-wrapper">                      
                                        <div id="upload-image-grid"></div>
            <input type="file" class="custom-file" id="std_photo"  onclick="clearImage()" onchange="preview()">
           <img class="photoimage"   id="frame" src="Assets/images/user-avtar/pic4.jpg"  class="img-fluid" />
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
                                        <li class="active"><a href="Dashboard" ><i class="fa fa-user"></i>Dashboard</a></li>                                     
                                        <li><a href="profile"><i class="fa fa-user"></i> My Profile</a></li>
                                        <!-- <li><a href="candidate-jobs-applied.html"><i class="fa fa-suitcase"></i> Applied Jobs</a></li> -->
                                        <li><a href="Myresume"><i class="fa fa-receipt"></i> My Resume</a></li>
                                        <!-- <li><a href="candidate-change-password.html"><i class="fa fa-fingerprint"></i> Change Passeord</a></li> -->
                                        <li><a href="Chat"><i class="fa fa-comments"></i>Chat</a></li>
                                    </ul>
                                </div>
                                
                            </div>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">
                                <div class="wt-admin-right-page-header">
                                    <h2>Randall Henderson</h2>
                                    <p>IT Contractor</p>
                                </div>
                
                                <div class="twm-dash-b-blocks mb-5">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                                                        <div class="wt-card-right wt-total-active-listing counter ">25</div>
                                                        <div class="wt-card-bottom-2 ">
                                                            <h4 class="m-b0">Posted Jobs</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-resume"></i></div>
                                                        <div class="wt-card-right  wt-total-listing-view counter ">435</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Total Applications</h4> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-3">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-envelope"></i></div>
                                                        <div class="wt-card-right wt-total-listing-review counter ">28</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Messages</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-4">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-bell"></i></div>
                                                        <div class="wt-card-right wt-total-listing-bookmarked counter ">18</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Notifications</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div> 
                                    
                                    <div class="col-lg-12 col-md-12 mb-4">
                                        <div class="panel panel-default">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0">Recent Jobs</h4>
                                                </div>


                                            <?php foreach($jobs as $job): ?>
                                                <div class="panel-body wt-panel-body bg-white">
                                                    <div class="twm-dashboard-candidates-wrap">
                                                      

                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="twm-dash-candidates-list">
                                                                <div class="twm-media">
                                                                  <div class="twm-media-pic">
                                                                      <img src="Assets/images/candidates/pic1.jpg" alt="#">
                                                                   </div>
                                                                </div>

                                                            <div class="twm-mid-content">
                                                                   <a href="#" class="twm-job-title">
                                                                   <b><?php echo $job->companyname; ?></b>
                                                                  </a>
                                                                  <br />
                                                                <?php echo  $job->label_name; ?>
                                                            
                                                                <div class="twm-fot-content">
                                                                   <div class="twm-left-info">
                                                                       <p class="twm-candidate-address"><i class="feather-map-pin"></i><?php echo $job->std_branch; ?></p>
                                                                   <div class="twm-jobs-vacancies"><br />End Date<span></span><?php echo $job->std_dob2; ?></div>
                                                                </div>
                                                                    <div class="twm-right-btn">
                                                                       <a class="btn btn-primary" href="<?php echo $job->std_applylink; ?>" role="button">Apply Now</a>         
                                                                    </div>                                                          
                                                           </div>
                                                        </div>
                                                    </div> 
                                            </div>
                                                                      
                                                </div>
                                              
                                            <?php endforeach; ?>
                                        </div>
                                    </div> 
                                        
                                        
                                        
                                </div>                
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>   
            <!-- OUR BLOG END -->  
    
        </div>
        </div>  </div>
        <!-- CONTENT END -->
      <script>
                                            function preview() {
                                                frame.src = URL.createObjectURL(event.target.files[0]);                                                
                                            }
                                            function clearImage() {
                                                document.getElementById('std_photo').value = null;
                                                frame.src = "";
                                                
                                            }

                                            
                                        </script> 
       