<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.php">
                                <img src="img/logo.jpg" alt="logo" style="margin-top: 15px; height: 80px; width: 100px;">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="partners.php">Partners</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="submitnew.php">Submit</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-center">
                            <?php 
                                if(!isset($_SESSION['username'])){   
                            ?>

                            <a href="#test-form" class="login popup-with-form">
                                <i class="flaticon-user"></i>
                                <span>log in</span>
                            </a>

                            <?php }

                            else{ ?>

                                <a href="home.php" style="color: #fff; padding-right:30px; font-size: 17px;">
                                    <?php echo "Hi,&nbsp; ". $_SESSION['username']; ?>
                                </a>
                                <a href="logout.php" style="color: #fff; padding-right:30px; font-size: 17px;">
                                    logout
                                </a>
                            <?php } ?>

                            <div class="live_chat_btn">
                                <a class="boxed_btn_orange" href="#">
                                    <i class="fa fa-phone"></i>
                                    <span>+8801782510089</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<?php
    
    
    //registration code

    if(isset($_POST['register'])){
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        
        $sql_u = "SELECT * FROM users WHERE username='$username'";
        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($connection, $sql_u);
        $res_e = mysqli_query($connection, $sql_e);

        if (mysqli_num_rows($res_u) > 0){
            
            echo "<script>alert('Sorry... username already taken');</script>";
            
        } else if(mysqli_num_rows($res_e) > 0){
            
            echo "<script>alert('Sorry... email already taken');</script>";
            
        } else{
        
            $query = "INSERT INTO users (username, email, password) ";
            $query .= "VALUES('{$username}', '{$email}', '{$password}' )";

            $register_user_query = mysqli_query($connection, $query);


            if($register_user_query){
                echo "<script>alert('You are successfully register');</script>";
            }
            else{
                echo "<script>alert('Not register something went worng');</script>";
            }
        } 
    } 


    //login code

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $query = mysqli_query($connection,"SELECT * FROM users WHERE username='$username' AND password='$password'");
        $num = mysqli_fetch_array($query);
        
        if($num>0){
            header("location:index.php");
            $_SESSION['username']=$username;
            $_SESSION['id']=$id;
            
        }
        else{
            echo "<script>alert('username / password incorrect');</script>";
            
        }
    }

?>      
      
       
<form id="test-form" class="white-popup-block mfp-hide" method="post" action="">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Sign in</h3>

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="text" placeholder="Enter username" name="username">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange" name="login">Sign in</button>
                    </div>
                </div>

            <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
            </p>
        </div>
    </div>
</form>
<!-- form itself end -->
     
<form id="home" class="white-popup-block mfp-hide" method="post" action="">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3 class="text-center"><a href="home.php"><?php echo $_SESSION['username'];?></a></h3>  
            <p><a class="" href="logout.php">logout</a>
            </p>
        </div>
    </div>
</form>
<!-- form itself end -->
    
    
<!-- form itself end-->
<form id="test-form2" class="white-popup-block mfp-hide" method="post" action="">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Resistration</h3>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <input type="text" placeholder="Enter username" name="username">
                </div>
                <div class="col-xl-12 col-md-12">
                    <input type="email" placeholder="Enter email" name="email">
                </div>
                <div class="col-xl-12 col-md-12">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="col-xl-12">
                   <button class="boxed_btn_orange" type="submit" name="register">Sign up</button>
                </div>
            </div>
        </div>
    </div>
</form>