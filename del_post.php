<?php
    header("Content-type:text/javascript;charset=utf-8");
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','lab_connect_mysql');

    $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable to connect');

    $StdId = $_POST['stdid'];

   


        if(isset($_POST)){
        if($_POST['isAdd'] == 'true'){
             $sql = "DELETE FROM content WHERE std_id = '".$StdId."' ";
             mysqli_query($con,$sql);
        }
    }

    mysqli_close($con);
    ?>