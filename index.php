<?php 
    include('apptop.php'); 
    include('nav.php'); 
    ?>
    <div class="container py-3">
        <div class="row">
            <div class="col-sm-3" style="padding:15px;">
                <img src="resource/profile.jpg" class="img-thumbnail " alt="profile_pic" style="border-radius: 255px; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); max-width:100%;" >
            </div>
            <div class="col-sm-9" style="padding:6px; background:white; border-radius:6px;">
                <div class="row">
                    <div class="col-sm-5">
                        <?php include('name.php'); ?>
                    </div>
                    <div class="col-sm-7">
                        <div class="container d-flex justify-content-start py-2" style="background:white; border-radius:6px;">
                            <span><h3>About Me</h3><span>
                            <div class="conatiner">
                                <p>
                                    Confident in working on software development and web development. Comfortable with current demanding 
                                    languages. Competitive hands-on experience in web development with the knowledge of Photoshop and soft skills.
                                    <span>😁 I Enjoy Coding 💻</span>
                                </p>
                            </div>
                            <div class="webcontent">
                            <h5>What I'm doing</h5>
                            <div class="grid-container">


                                <div class="grid-item">

                                    <p>
                                        <i href="#" class="fa fa-tablet" style="font-size:30px"></i>
                                        Web development for cross platform access using HTML, CSS, JS, jQuery.</p>
                                </div>
                                <div class="grid-item responsive">

                                    <p>
                                        <i href="#" class="fa fa-code" style="font-size:30px"></i>
                                        Backend Connectivity and Dynamic site Performance.
                                    </p>
                                </div>

                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('appbottom.php'); ?>
