<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        body{
            font-family: 'Kanit', sans-serif;
        }
        input{
            font-family: 'Kanit', sans-serif;
            border: solid;
            border-radius: 5px;
        }
        button{
            font-family: 'Kanit', sans-serif;
            border: solid;
            border-radius: 5px;
        }
    </style>
    <center>
            <table>
                <thead>
                    <th>mem_id</th>
                    <th>username</th>
                    <th>password</th>
                    <th>name</th>
                    <th>phone</th>
                    <th colspan="2">Action</th>
                </thead>
                <form action="config.php" method="post">
                <thead>
                    <td><input type="text" disabled hidden name="mem_id"></td>
                    <td><input type="text" name="username"></td>
                    <td><input type="text" name="password"></td>
                    <td><input type="text" name="name"></td>
                    <td><input type="text" name="phone"></td>
                    <td><button type="submit" name="insert" value="insert">Insert</button></td>
                </thead>
                </form>
                <?php
                    include('connect.php'); //เชื่อมต่อฐานข้อมูล
                    $sql = "SELECT * FROM `tb_member`"; //query data in table tb_member
                    $query = mysqli_query($conn, $sql); //query php connect and $sql
                    while( $result = mysqli_fetch_array($query)) { //query result date in $query
                ?>
                <form action="config.php" method="post">
                <tbody>
                    <tr>
                            <input type="hidden"  name="mem_id" value="<?php echo $result['mem_id'];?>">
                        <td><input type="text" disabled name="mem_id" value="<?php echo $result['mem_id'];?>"></td>
                        <td><input type="text" name="username" value="<?php echo $result['username'];?>"></td>
                        <td><input type="text" name="password" value="<?php echo $result['password'];?>"></td>
                        <td><input type="text" name="name" value="<?php echo $result['name'];?>"></td>
                        <td><input type="text" name="phone" value="<?php echo $result['phone'];?>"></td>
                        <td><button type="submit" name="update" value="update">update</button></td>
                        <td><button type="submit" name="delete" value="delete">delete</button></td>
                    </tr>
                </tbody>
                </form>
                <?php } ?>
            </table>
        </form>
    </center>
</body>
</html>
