<?php include"includes/head.php"; ?>

<body>
    <?php include"includes/nav.php"; ?> 
    <div class="bradcam_area bg-overlay">
        <h3>Business Idea Submission Form</h3>
    </div>
    <br><br>

    <div>
        <div class="container">
            <?php

                if(isset($_SESSION['username'])){ 
                    $username = $_SESSION['username'];
                }
                if(isset($_POST['idea_submit'])){
                    $name = $_POST['name'];
                    $partner_name = $_POST['partner_name'];
                    $number = $_POST['number'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $division = $_POST['division'];
                    $district = $_POST['district'];
                    $education = $_POST['education'];
                    $dob = $_POST['dob'];

                    $photo = $_FILES['photo']['name'];
                    $photo_temp = $_FILES['photo']['tmp_name'];
                    move_uploaded_file($photo_temp, "img/idea/$photo" );

                    $idea_title = $_POST['idea_title'];
                    $idea_details = $_POST['idea_details'];
                    $model = $_POST['model'];
                    $place = $_POST['place'];
                    $amount = $_POST['amount'];
                    $personal_amount = $_POST['personal_amount'];
                    $marketing = $_POST['marketing'];
                    $financial = $_POST['financial'];
                    $support = $_POST['support'];
                    $success = $_POST['success'];
                    $training = $_POST['training'];
                    $training_details = $_POST['training_details'];
                    $program = $_POST['program'];
                    $yourself = $_POST['yourself'];
                    $payment = $_POST['payment'];

                    $payment_photo = $_FILES['payment_photo']['name'];
                    $photo_temp2 = $_FILES['payment_photo']['tmp_name'];
                    move_uploaded_file($photo_temp2, "img/payment/$payment_photo" );

                    if(!empty($name) && !empty($email)  && !empty($number) && !empty($address) && !empty($division) && !empty($district) && !empty($education) && !empty($dob) && !empty($idea_title) && !empty($model) && !empty($place) && !empty($amount) && !empty($personal_amount) && !empty($marketing) && !empty($financial) && !empty($support) && !empty($success) && !empty($yourself)){
                        $name = mysqli_real_escape_string($connection, $name);
                        $number = mysqli_real_escape_string($connection, $number);
                        $email = mysqli_real_escape_string($connection, $email);
                        $address = mysqli_real_escape_string($connection, $address);
                        $division = mysqli_real_escape_string($connection, $division);
                        $district = mysqli_real_escape_string($connection, $district);
                        $educationl = mysqli_real_escape_string($connection, $education);
                        $dob = mysqli_real_escape_string($connection, $dob);
                        $idea_title = mysqli_real_escape_string($connection, $idea_title);
                        $idea_details = mysqli_real_escape_string($connection, $idea_details);
                        $model = mysqli_real_escape_string($connection, $model);
                        $place = mysqli_real_escape_string($connection, $place);
                        $amount = mysqli_real_escape_string($connection, $amount);
                        $personal_amount = mysqli_real_escape_string($connection, $personal_amount);
                        $marketing = mysqli_real_escape_string($connection, $marketing);
                        $financial = mysqli_real_escape_string($connection, $financial);
                        $support = mysqli_real_escape_string($connection, $support);
                        $success = mysqli_real_escape_string($connection, $success);
                        $training = mysqli_real_escape_string($connection, $training);
                        $training_details = mysqli_real_escape_string($connection, $training_details);
                        $yourself = mysqli_real_escape_string($connection, $yourself);
    
                        $query = "INSERT INTO idea (username, name, partner_name, number, email, address, division, district, education, dob, photo, idea_title, idea_details, model, place, amount, personal_amount, marketing, financial, support, success, training, training_details, program, yourself, payment, payment_photo, send_date ) ";
                        $query .= "VALUES ('{$username}', '{$name}', '{$partner_name}', '{$number}', '{$email}', '{$address}', '{$division}', '{$district}','{$education}','{$dob}', '{$photo}', '{$idea_title}', '{$idea_details}', '{$model}', '{$place}', '{$amount}', '{$personal_amount}', '{$marketing}',  '{$financial}', '{$support}', '{$success}', '{$training}', '{$training_details}', '{$program}', '{$yourself}', '{$payment}', '{$payment_photo}', now() )";
                        $contact_query = mysqli_query($connection, $query);

                        if(!$contact_query){
                            die("Query Failed !" .mysqli_error($connection));
                        } 
                    } 
                }
            ?>

            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <h3><b>Personal Information(Part I)</b></h3><br>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Name is required">
                                    <span class="label-input100">Name:</span>
                                    <input class="input100" type="text" name="name" placeholder="Enter full name">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="">
                                    <span class="label-input100">Partner Name:</span>
                                    <input class="input100" type="text" name="partner_name" placeholder="Enter full name">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Phone is required">
                            <span class="label-input100">Contact No:</span>
                            <input class="input100" type="number" name="number" placeholder="Enter phone number">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email ID:</span>
                            <input class="input100" type="email" name="email" placeholder="Enter email addess">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Address:</span>
                            <textarea class="input100" name="address" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Division:</span>
                            <select name="division">
                                <option value="">---</option>
                                <option value="Barisal" name="division">Barisal</option> 
                                <option value="Chattogram" name="division">Chattogram</option>  							
                                <option value="Dhaka" name="division">Dhaka</option>
                                <option value="Khulna" name="division">Khulna</option>
                                <option value="Mymensingh" name="division">Mymensingh</option>  							
                                <option value="Rajshahi" name="division">Rajshahi</option>
                                <option value="Rangpur" name="division">Rangpur</option>  							
                                <option value="Sylhet" name="division">Sylhet</option>    
                            </select>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">District :</span>
                            <select name="district">
                                <option value="">---</option>
                                <option value="Barguna" name="district">Barguna</option>
                                <option value="Barisal" name="district">Barisal</option>
                                <option value="Bhola" name="district">Bhola</option>
                                <option value="Jhalokati" name="district">Jhalokati</option>
                                <option value="Patuakhali" name="district">Patuakhali</option>
                                <option value="Pirojpur" name="district">Pirojpur</option>
                                <option value="Bandarban" name="district">Bandarban</option>
                                <option value="Brahmanbaria" name="district">Brahmanbaria</option>
                                <option value="Chandpur" name="district">Chandpur</option>
                                <option value="Chattogram" name="district">Chattogram</option>
                                <option value="Cumilla" name="district">Cumilla</option>
                                <option value="Cox's Bazar" name="district">Cox's Bazar</option>
                                <option value="Feni" name="district">Feni</option>
                                <option value="Khagrachhari" name="district">Khagrachhari</option>
                                <option value="Lakshmipur" name="district">Lakshmipur</option>
                                <option value="Noakhali" name="district">Noakhali</option>
                                <option value="Rangamati" name="district">Rangamati</option>
                                <option value="Dhaka" name="district">Dhaka</option>
                                <option value="Faridpur" name="district">Faridpur</option>
                                <option value="Gazipur" name="district">Gazipur</option>
                                <option value="Gopalganj" name="district">Gopalganj</option>
                                <option value="Kishoreganj" name="district">Kishoreganj</option>
                                <option value="Madaripur" name="district">Madaripur</option>
                                <option value="Manikganj" name="district">Manikganj</option>
                                <option value="Munshiganj" name="district">Munshiganj</option>
                                <option value="Narayanganj" name="district">Narayanganj</option>
                                <option value="Narsingdi" name="district">Narsingdi</option>
                                <option value="Rajbari" name="district">Rajbari</option>
                                <option value="Shariatpur" name="district">Shariatpur</option>
                                <option value="Tangail" name="district">Tangail</option>
                                <option value="Bagerhat" name="district">Bagerhat</option>
                                <option value="Chuadanga" name="district">Chuadanga</option>
                                <option value="Jashore" name="district">Jashore</option>
                                <option value="Jhenaidah" name="district">Jhenaidah</option>
                                <option value="Khulna" name="district">Khulna</option>
                                <option value="Kushtia" name="district">Kushtia</option>
                                <option value="Magura" name="district">Magura</option>
                                <option value="Meherpur" name="district">Meherpur</option>
                                <option value="Narail" name="district">Narail</option>
                                <option value="Satkhira" name="district">Satkhira</option>
                                <option value="Jamalpur" name="district">Jamalpur</option>
                                <option value="Mymensingh" name="district">Mymensingh</option>
                                <option value="Netrokona" name="district">Netrokona</option>
                                <option value="Sherpur" name="district">Sherpur</option>
                                <option value="Bogura" name="district">Bogura</option>
                                <option value="Joypurhat" name="district">Joypurhat</option>
                                <option value="Naogaon" name="district">Naogaon</option>
                                <option value="Natore" name="district">Natore</option>
                                <option value="Chapainawabganj" name="district">Chapainawabganj</option>
                                <option value="Pabna" name="district">Pabna</option>
                                <option value="Rajshahi" name="district">Rajshahi</option>
                                <option value="Sirajganj" name="district">Sirajganj</option>
                                <option value="Dinajpur" name="district">Dinajpur</option>
                                <option value="Gaibandha" name="district">Gaibandha</option>
                                <option value="Kurigram" name="district">Kurigram</option>
                                <option value="Lalmonirhat" name="district">Lalmonirhat</option>
                                <option value="Nilphamari" name="district">Nilphamari</option>
                                <option value="Panchagarh" name="district">Panchagarh</option>
                                <option value="Rangpur" name="district">Rangpur</option>
                                <option value="Thakurgaon" name="district">Thakurgaon</option>
                                <option value="Habiganj" name="district">Habiganj</option>
                                <option value="Moulvibazar" name="district">Moulvibazar</option>
                                <option value="Sunamganj" name="district">Sunamganj</option>
                                <option value="Sylhet" name="district">Sylhet</option>
                            </select>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Education:</span>
                            <input class="input100" type="text" name="education" placeholder="">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Date of Birth:</span>
                            <input class="input100" type="Date" name="dob" placeholder="">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" >
                            <label for="photo"><b>PICTURE :</b></label>
                            <input type="file" name="photo">
                        </div>

                        <h3>Business Idea Details(Part II)</h3><br>

                        <div class="wrap-contact100">
                            <label class="label-input100">Title of the Idea	: *</label>
                            <div class="wrap-input100 rs1 validate-input">
                                <input class="input100" type="text" name="idea_title" placeholder="">					
                                <span class="focus-input100"></span>
                            </div>
                        </div>

                        <label class="label-input100" for="email">Share the idea in brief:</label>
                        <div class="wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="idea_details" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100">Have you developed the business model:</label>
                        <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="model" placeholder="">					
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100">Where the business will be established:</label>
                        <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="place" placeholder="">					
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100">Total Investment requirement (In TK):</label>
                            <div class="wrap-input100 rs1 validate-input">
                                <input class="input100" type="text" name="amount" placeholder="">					
                                <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100">How much will you invest as equity?</label>
                        <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="personal_amount" placeholder="">					
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="message">Share your marketing plan (Customers, How to reach them?):</label>
                        <div class="wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="marketing" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="message">Share your financial plan (Source of Fund and Revenue):</label>
                        <div class="wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="financial" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="message">What support you need to start the business:</label>
                        <div class="wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="support" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="message">Why do you think you will be successful in this business, give 5 reasons:</label>
                        <div class="wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="success" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="yes_no_radio">Have you attended any training?</label><br>
                                </div>
                                
                                <div class="col-md-2">
                                    <p><input type="radio" name="training" value="Yes" checked>Yes</p>
                                </div>

                                <div class="col-md-2">
                                    <p><input type="radio" name="training" value="No">No</p><br>
                                </div>
                            </div>
                        </div>

                        <label class="label-input100" for="message">If Yes, Share the details:</label>
                        <div class="wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="training_details" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="yes_no_radio">Will you be available for 3-7 days residential (overnight stay) training program?</label> 
                                </div>

                                <div class="col-md-2">
                                    <p><input type="radio" name="program" value="Yes" checked>Yes</p>
                                </div>

                                <div class="col-md-2">
                                    <p><input type="radio" name="program" value="No">No</p>
                                </div>
                            </div>
                        </div>

                        <label class="label-input100" for="message">Tell us about you:</label>
                        <div class="wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="yourself" placeholder=""></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <h3><b>Payment Details(Part III)</b></h3><br>
                            <p>Please entre the Transaction Id code (BKash) or attach Scan copy of the deposit Slip of payment of Registration Fees of BDT 100. </p>
                            <label for="file"><b>Transaction ID: </b></label>
                            <input type="text" name="payment" value=""><br>
                            <label for="payment_photo"><b>Attachment: </b></label>
                            <input type="file" name="payment_photo">

                            <div class="contact100-form-checkbox">
                                <div class="row">
                                    <div class="col-md-1">
                                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="agree*">
                                    </div>

                                    <div class="col-md-11">
                                        <label class="label-checkbox100" for="ckb1">
                                            <b>I confirm that I agree to follow the rules and regulations of Women Innovation Challenge 2020</b>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <button class="contact100-form-btn" type="submit" name="idea_submit">
                                <span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>   

    <?php include"includes/footer.php"; ?>
</body>
</html>