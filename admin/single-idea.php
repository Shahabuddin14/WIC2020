<?php
    session_start();
    include('include/config.php');
    if(strlen($_SESSION['alogin'])==0){	
        header('location:index.php');
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin| Idea</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>

    <body>
        <?php include('include/header.php');?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <?php include('include/sidebar.php');?>	
                    <div class="span9">
                        <div class="content">
                            
                            <?php
                                if(isset($_GET['username'])){

                $the_username = $_GET['username'];

                $query = "SELECT * FROM idea WHERE username = '$the_username' ";
                $select_idea_query = mysqli_query($con, $query);

                while($row = mysqli_fetch_assoc($select_idea_query)){
                    
                    $username = $row['username'];
                    $name = $row['name'];
                    $partner_name = $row['partner_name'];
                    $number = $row['number'];
                    $email = $row['email'];
                    $address = $row['address'];
                    $division = $row['division'];
                    $district = $row['district'];
                    $education = $row['education'];
                    $dob = $row['dob'];
                    $photo = $row['photo'];
                    $idea_title = $row['idea_title'];
                    $idea_details = $row['idea_details'];
                    $model = $row['model'];
                    $place = $row['place'];
                    $amount = $row['amount'];
                    $personal_amount = $row['personal_amount'];
                    $marketing = $row['marketing'];
                    $financial = $row['financial'];
                    $support = $row['support'];
                    $success = $row['success'];
                    $training = $row['training'];
                    $training_details = $row['training_details'];
                    $program = $row['program'];
                    $yourself = $row['yourself'];
                    $payment = $row['payment'];

                    $payment_photo = $row['payment_photo'];
                   
        ?>  
             
              <div class="idea_details">
                  <table class="table table-bordered table-hover">
                      <tbody>
                          <tr>
                              <td>Name</td>
                              <td><?php echo $name; ?></td>
                          </tr>
                          <tr>
                              <td>partner_name</td>
                              <td><?php echo $partner_name; ?></td>
                          </tr>
                          <tr>
                              <td>number</td>
                              <td><?php echo $number; ?></td>
                          </tr>
                          <tr>
                              <td>email</td>
                              <td><?php echo $email; ?></td>
                          </tr>
                          <tr>
                              <td>address</td>
                              <td><?php echo $address; ?></td>
                          </tr>
                          <tr>
                              <td>division</td>
                              <td><?php echo $division; ?></td>
                          </tr>
                          <tr>
                              <td>district</td>
                              <td><?php echo $district; ?></td>
                          </tr>
                          <tr>
                              <td>education</td>
                              <td><?php echo $education; ?></td>
                          </tr>
                          <tr>
                              <td>Date of birth</td>
                              <td><?php echo $dob; ?></td>
                          </tr>
                          <tr>
                              <td>photo</td>
                              <td><img src="../img/idea/<?php echo $photo; ?>" alt="" class="img-fluid" style="height: 70px;"></td>
                          </tr>
                          <tr>
                              <td>idea_title</td>
                              <td><?php echo $idea_title; ?></td>
                          </tr>
                          <tr>
                              <td>idea_details</td>
                              <td><?php echo $idea_details; ?></td>
                          </tr>
                          <tr>
                              <td>model</td>
                              <td><?php echo $model; ?></td>
                          </tr>
                          <tr>
                              <td>place</td>
                              <td><?php echo $place; ?></td>
                          </tr>
                           <tr>
                              <td>amount</td>
                              <td><?php echo $amount; ?></td>
                          </tr>
                           <tr>
                              <td>personal</td>
                              <td><?php echo $personal_amount; ?></td>
                          </tr>
                           <tr>
                              <td>marketing</td>
                              <td><?php echo $marketing; ?></td>
                          </tr>
                           <tr>
                              <td>financial</td>
                              <td><?php echo $financial; ?></td>
                          </tr>
                          <tr>
                              <td>support</td>
                              <td><?php echo $support; ?></td>
                          </tr>
                          <tr>
                              <td>success</td>
                              <td><?php echo $success; ?></td>
                          </tr>
                          <tr>
                              <td>training</td>
                              <td><?php echo $training; ?></td>
                          </tr>
                          <tr>
                              <td>details</td>
                              <td><?php echo $training_details; ?></td>
                          </tr>
                          <tr>
                              <td>program</td>
                              <td><?php echo $program; ?></td>
                          </tr>
                          <tr>
                              <td>yourself</td>
                              <td><?php echo $yourself; ?></td>
                          </tr>
                          <tr>
                              <td>payment</td>
                              <td><?php echo $payment; ?></td>
                          </tr>
                          <tr>
                              <td>photo</td>
                              <td><img src="../img/payment/<?php echo $payment_photophoto; ?>" alt="" class="img-fluid" style="height: 70px;"></td>
                          </tr>
                      </tbody>
                  </table>
                  
              </div>
                
              
              
              
              
              
               <?php } } ?>             
                            
                            
                            
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('include/footer.php');?>

        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    </body>
    <?php } ?>
</html>