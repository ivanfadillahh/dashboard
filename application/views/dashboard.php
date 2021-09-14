<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Panel</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            margin: 0;
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #navbar {
            overflow: hidden;
            background-color: #333;
        }

        #navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        #navbar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 60px;
        }
    </style>
</head>
<body style="text-align:center;">

    <div id="navbar">
        <a class="active" href="<?= base_url()?>Welcome/dashboard">Dashboard</a>
        <a href="#">Teacher</a>
        <a href="<?= base_url()?>Welcome/students">Students</a>
        <a href="#">Courses</a>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1):?>
        <a href="<?= base_url()?>Welcome/users">Users</a>
        <?php endif;?>
        <a href="<?= base_url()?>Welcome/logout">Logout</a>
    </div>

    <div class="w3-container">
        
    
    </div>
</body>
</html>