<?php include"includes/head.php"; ?>

<body>
    <?php include"includes/nav.php"; ?> 
    <div class="bradcam_area bg-overlay">
        <h3 class="animated bounceIn">contact us</h3>
    </div>
    <br><br>

    <?php

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if(!empty($name) && !empty($email) && !empty($message)){
                $name = mysqli_real_escape_string($connection, $name);
                $email = mysqli_real_escape_string($connection, $email);
                $message = mysqli_real_escape_string($connection, $message);

                $query = "INSERT INTO contact (name, email, subject, message, send_date ) ";
                $query .= "VALUES ('{$name}', '{$email}', 'New Email', '{$message}', now() )";
                $contact_query = mysqli_query($connection, $query);

                if(!$contact_query){
                    die("Query Failed !" .mysqli_error($connection));
                } 
            } 
        }
    ?>

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="contact.php" method="post" class="form-contact contact_form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control valid" placeholder="Enter your name">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control valid" placeholder="Email">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control w-100" cols="30" rows="9" placeholder=" Message"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn" name="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Bangladesh Istitute of ICT in Development</h3>
                            <p>House No. 174, Road No. 2, </p>
                            <p>Mohakhali DOHS, Dhaka 1206, Bangladesh</p>
                        </div>
                    </div>
                    
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+88028714169</h3>
                        </div>
                    </div>
                    
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>wic@biid.org.bd</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.964487574292!2d90.39621151414366!3d23.78427889340004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c76b65733b7d%3A0x41086d843d3e0e6!2sBangladesh%20Institute%20of%20ICT%20in%20Development%20(BIID)!5e0!3m2!1sen!2sbd!4v1578297145189!5m2!1sen!2sbd" width="1190" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>

    <?php include"includes/footer.php"; ?>
</body>
</html>