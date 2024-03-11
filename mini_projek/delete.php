<?php
include('config.php');
$nombor_perolehan = $_GET['nombor_perolehan'];
$query = mysqli_query($connect,"DELETE FROM maklumat_peralatan WHERE nombor_perolehan ='$nombor_perolehan'");
header("Location:rekod_admin.php");
?>
