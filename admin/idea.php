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
                            <div class="module">
                                <div class="module-head">
                                    <h3>idea</h3>
                                </div>

                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>username</th>
                                                <th>name</th>
                                                <th>number</th>
                                                <th>email</th>
                                                <th>idea</th>
                                                <th>details</th>
                                                <th>date</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                            $query = mysqli_query($con,"select * from idea ");
                                            $cnt = 1;
                                            while($row=mysqli_fetch_array($query)){
                                        ?>	
                                        
                                        

                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><a href="single-idea.php?username=<?php echo htmlentities($row['username']);?>"><?php echo htmlentities($row['username']);?></a></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['number']);?></td>
                                            <td> <?php echo htmlentities($row['email']);?></td>
                                            <td> <?php echo htmlentities($row['idea_title']);?></td>
                                            <td> <?php echo htmlentities($row['idea_details']);?></td>
                                            <td> <?php echo htmlentities($row['send_date']);?></td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>
                                    </table>
                                </div>
                            </div>
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