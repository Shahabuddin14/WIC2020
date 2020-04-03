<?php include"includes/head.php"; ?>

<body>
    <?php include"includes/nav.php"; ?>
     
    <div class="bradcam_area bg-overlay">
        <h3>Frequently Asked Questions (FAQ)</h3>
    </div>
    <br>
    <br>
    
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 section-heading" align="justify">
                    <h3>Who Can Join?</h3>
                    <p>Women within age range of 18 to 45 can join the platform to start business as career and pursue their dreams. Individuals with disability are encouraged to apply. </p>
                    <h3>Why Should I Join?</h3>
                    <h3><strong>Can win cash prizes up to BDT 10 lac as Equity!</strong></h3>
                    <p><strong>Top 1,000 Business Ideas </strong>will be supported with technical skills, incubation, credit, equity and mentoring facilities.</p>
                    <p><strong>100 winning participants</strong> will receive <strong>cash prizes</strong> as equity investment and <strong>2500 winners</strong> will be enrolled for <strong>bootcamp, shared working space and incubation facility</strong> across the country.</p>
                    <p>Selected business ideas will get a chance <strong>to pitch</strong> directly for investment at Start-Up Bangladesh.</p>
                    <h3>Who Will Be Selected?</h3>
                    <p>Business ideas will be selected after reviewing the business concept and entrepreneurs personality. Selection for final round will be based on business viability, innovation, readiness and skills.</p>
                    <p>Priorities will be given to the businesses based on location (outside Dhaka Metropolitan City), sector (Agro-processing &amp; services) and special (Differently Able &amp; Disadvantage community).  </p>
                    <h3>Is There Any Fees To Join?</h3>
                    <p>Yes, BDT 100 will be charged for submission of the Business Idea and Participation in the Roadshows. BDT 250 will be applicable for joining the day long Bootcamp session. BDT 5000 will be charged for 3 day long residential Design Camp Session.</p>
                    <p>Scholarships will be available for the special category of participants. </p>
                    <h3>When I can Submit the Business Idea?</h3>
                    <p>The Women Innovation Challenge will accept business ideas round the year and assess quarterly. So you can submit your business idea NOW! </p>
                    <h3>Where To Submit the Business Idea?</h3>
                    <p>You can submit your Business Idea online at www.b-lab.com.bd/wic2020/Apply and send through email at wic@biid.org.bd</p>
                    <p>Hand written or printed hardcopies can send at Women Innovation Challenge, BIID, House No. 174, Road No. 2, Mohakhali DOHS, Dhaka 1206, Bangladesh </p>
                    <h3>When I will know whether my idea is selected or not?</h3>
                    <p>Within 21 days of receipt of your business idea, a notification mail / message / call / letter will be send out the decision of acceptance.  </p>
                    <h3>Where can I get more information?</h3>
                    <p>If you have further query or need any clarification, please fill up the following Feedback Form. </p>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="site-section bg-light contact-wrap" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8  section-heading"><br>
                    <span class="subheading">Get In Touch</span>
                    <h2 class="heading mb-3">Feedback Form</h2>
                </div>
            </div>

            <?php
                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $number = $_POST['number'];
                    $address = $_POST['address'];
                    $message = $_POST['message'];

                    if(!empty($name) && !empty($email) && !empty($message)){
                        $name = mysqli_real_escape_string($connection, $name);
                        $email = mysqli_real_escape_string($connection, $email);
                        $message = mysqli_real_escape_string($connection, $message);

                        $query = "INSERT INTO feedback (name, number, email, subject, address, message, send_date ) ";
                        $query .= "VALUES ('{$name}', '{$number}', '{$email}', '{$subject}','{$address}', '{$message}', now() )";
                        $contact_query = mysqli_query($connection, $query);

                        if(!$contact_query){
                            die("Query Failed !" .mysqli_error($connection));
                        } 
                    } 
                }
            ?>

            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form method="post" data-aos="fade">
                        <div class="form-group row">
                            <div class="col-md-12 mb-3 mb-lg-0">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="digits" class="form-control" placeholder="Contact" name="number">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                        </div>
                        			  
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject" name="subject">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea class="form-control" id="" cols="30" rows="10" placeholder="Write your message here." name="message"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary py-3 px-5 btn-block" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include"includes/footer.php"; ?>
</body>
</html>