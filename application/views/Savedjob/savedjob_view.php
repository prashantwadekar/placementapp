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
                                <li><a href="candidate-dashboard.html"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                
                                <li class="active"><a href="candidate-saved-jobs.html"><i class="fa fa-file-download"></i> Saved Jobs</a></li>
                              
                              
                                <li><a href="candidate-chat.html"><i class="fa fa-comments"></i>Chat</a></li>
                            </ul>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                    <!--Filter Short By-->
                    <div class="twm-right-section-panel candidate-save-job site-bg-gray">
                        <div class="twm-D_table table-responsive">
                            <table id="jobs_bookmark_table" class="table table-bordered twm-candidate-save-job-list-wrap">
                                <thead>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Company</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($jobs as $job): ?>
<tr>
    <td>
        <div class="twm-candidate-save-job-list">
            <div class="twm-media">
                <div class="twm-media-pic">
                    <!-- <img src="<?php echo base_url('Assets/images/jobs-company/'.$job->company_logo); ?>" alt="#"> -->
                </div>
            </div>
            <div class="twm-mid-content">
                <a href="#" class="twm-job-title">
                    <h4><?php echo $job->label_name; ?></h4>
                </a>
            </div>
        </div>
    </td>
    <td><a href="javascript:;"><?php echo $job->companyname; ?></a></td>
    <td>
        <div><?php echo $job->std_dob2; ?></div>
    </td>
    <td>
        <div class="twm-table-controls">
            <ul class="twm-DT-controls-icon list-unstyled">
                <li>
                    <a href="<?php echo base_url('View_job/'.$job->id); ?>" role="button" class="custom-toltip">
                        <span class="fa fa-eye"></span>
                        <span class="custom-toltip-block">View</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="<?php echo base_url('Savedjob/delete_job/'.$job->id ); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                        <span class="far fa-trash-alt"></span>
                    </a>
                </li> -->
            </ul>
        </div>
    </td>
</tr>
<?php endforeach; ?>


                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>

            </div>
        </div>
    </div>   
    <!-- OUR BLOG END -->
  
    

</div>
<!-- CONTENT END -->