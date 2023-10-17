<?php
    $con=mysqli_connect("localhost:3306","user","123456");
    if(!mysqli_select_db($con,"database")){
        echo "FAIL CONNECTION!";
        exit;
    }else {
        // echo "SUCCESS CONNECYION!";
    }
    mysqli_query($con,"set names utf8");
    $account=$_POST["account"];
    $password=$_POST["password"];
    if ($_POST["sex"]==1) {
        $sex="男";
    }else{
        $sex="女";
    }
    $photo=$_POST["photo"];
    $sql1="INSERT INTO `datatable`(`name`, `password`, `sex`,`photo`) VALUES ('$account','$password','$sex','$photo')";
    $sql2="SELECT `name`, `password`, `sex`, `photo` FROM `datatable` WHERE name='$account'";
    if(mysqli_query($con,$sql1)){
        //echo "添加成功!";
        //echo "添加成功!添加信息为:\n账号:"+;
    }
    else{
        echo "Add Fail!";
    }
    $row = mysqli_fetch_assoc(mysqli_query($con,$sql2));
    //echo $row["photo"];
    echo json_encode($photo);
    echo gettype($photo);

    //print_r(substr($row["photo"],5));
    //echo substr($row["photo"],5,-0);
    mysqli_close($con);
?>