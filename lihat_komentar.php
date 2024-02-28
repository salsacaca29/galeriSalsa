<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Komentar</title>
        <style>
            body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color:#CD853F;
        color: white;
}

h1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    color: #CD853F;
    background-color: #F5DEB3;
}

p {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    color: white;
    background-color: black;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 20px 0;
    background-color: #F5DEB3;
    overflow: hidden;
}

li {
    float: left;
}

li a {
    display: block;
    color: #CD853F;
    text-align: center;
    padding: 13px 15px;
    text-decoration: none;
}

li a:hover {
    background-color: black;
}

form {
    margin: 30px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 5px solid #F5DEB3;
}

th {
    background-color: #F4A460;
    color: #F5DEB3;
}

tr:hover {
    background-color: black;
}

input[type="text"], input[type="submit"] {
    padding: 8px;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: black;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: black;
}

img {
    max-width: 100%;
    height: auto;
}

    </style>
</head>
<body>
    <h1><b><?=$_SESSION['namalengkap']?></b></h1>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <table width="100%" border="1" cellpadding=5 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Logout</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from komentarfoto WHERE fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['komentarid']?></td>
                <td><?=$data['namalengkap']?></td>
                <td><?=$data['isikomentar']?></td>
                <td><?=$data['tanggalkomentar']?></td>
            </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>