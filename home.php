<?php 
    include"includes/head.php"; 
    error_reporting(0)
?>

<body>
    <?php include"includes/nav.php"; ?>
    
      <div class="bradcam_area bg-overlay">
        <h3 class="animated bounceIn"><?php echo "Welcome, "." ". $_SESSION['username']; ?></h3>
    </div>
    <br>
    <br> 
    
    <div class="container">
        <h2>Personal Information</h2>
        
        <?php 
            if(isset($_SESSION['username'])){ 
                $username = $_SESSION['username'];
            }
        
            $query = "SELECT * FROM idea WHERE username = '$username' ORDER BY id DESC LIMIT 1 ";
            $select_query = mysqli_query($connection, $query);
            
            while($row = mysqli_fetch_assoc($select_query)){
                $name = $row['name'];
                $idea_title = $row['idea_title'];
                $number = $row['number'];
                $email = $row['email'];
                $idea_details = $row['idea_details'];
                $photo = $row['photo'];
            
            }
        
        ?>
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/idea/<?php echo $photo;?>" alt="" class="img-fluid img-thumbnail" style="width:50%;">
            </div>
            
            <div class="col-md-8">
                <h5><?php echo $name; ?></h5>
                <h5><?php echo $number; ?></h5>
                <h5><?php echo $email; ?></h5>
            </div>
            
            <div class="col-md-6 offset-md-4">
                <h3><i><?php echo $idea_title; ?></i></h3>
            </div>
            <div class="col-md-6 offset-md-4">
                
                <p style="border: 1px solid black;"><?php echo $idea_details; ?></p>
            </div>
        </div>
        
        
        
    </div>
    
    
    <?php include"includes/footer.php"; ?>
    
    
</body> 
    
    
    
    
    
    
    
    
    
    
    
    
    




