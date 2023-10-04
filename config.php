<?php
    include('connect.php');
    print_r($_POST);
    if(isset($_POST['insert'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $sql ="INSERT INTO `tb_member` (`mem_id`, `username`, `password`, `name`, `phone`) VALUES (NULL, '$username', '$password', '$name', '$phone')";
        $query = mysqli_query($conn,$sql);
        if($query){
            // echo "Insert Success";
            header('location: query.php'); //return to query
        }
    } else if (isset($_POST['update'])){
        $mem_id = $_POST['mem_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $sql ="UPDATE `tb_member` SET `username` = '$username', `password` = '$password', `name` = '$name', `phone` = '$phone' WHERE `tb_member`.`mem_id` = '$mem_id';";
        $query = mysqli_query($conn,$sql);
        if($query){
            // echo "Insert Success";
            header('location: query.php'); //return to query
        }
    } else if (isset($_POST['delete'])){
        $mem_id = $_POST['mem_id'];
        $sql ="DELETE FROM tb_member WHERE `tb_member`.`mem_id` = '$mem_id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            // echo "Insert Success";
            header('location: query.php'); //return to query
            echo "<script>alert('เพิ่มข้อมูลเสร็จสิ้น'); window.location = 'manage_cate.php';</script";
        }
    }
?>
