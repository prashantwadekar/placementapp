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
                                <li class="active"><a href="applyjob"><i class="fa fa-suitcase"></i> Applied Jobs</a></li>
                                <li><a href="chat"><i class="fa fa-comments"></i>Chat</a></li>
                            </ul>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                    <div class="twm-right-section-panel candidate-save-job site-bg-gray">
                        <!--Filter Short By-->
                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                            <span class="woocommerce-result-count-left">Applied 250 jobs</span>
                        
                            <form class="woocommerce-ordering twm-filter-select" method="get">
                                <span class="woocommerce-result-count">Short By</span>
                                <select class="wt-select-bar-2 selectpicker"  data-live-search="true" data-bv-field="size">
                                    <option>Most Recent</option>
                                    <option>Freelance</option>
                                    <option>Full Time</option>
                                    <option>Internship</option>
                                    <option>Part Time</option>
                                    <option>Temporary</option>
                                </select>
                                <select class="wt-select-bar-2 selectpicker"  data-live-search="true" data-bv-field="size">
                                    <option>Show 10</option>
                                    <option>Show 20</option>
                                    <option>Show 30</option>
                                    <option>Show 40</option>
                                    <option>Show 50</option>
                                    <option>Show 60</option>
                                </select>
                            </form>

                        </div>

                        <div class="twm-jobs-list-wrap">
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
<!-- CONTENT END -->    