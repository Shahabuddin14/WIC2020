<?php
    session_start();
    $_SESSION['alogin']=="";
    session_unset();
    $_SESSION['errmsg']="Logout sucessful";
?>

<script language="javascript">
    document.location="index.php";
</script>
