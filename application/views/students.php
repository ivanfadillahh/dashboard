<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Panel</title>
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
        <a href="<?= base_url()?>Welcome/dashboard">Dashboard</a>
        <a href="#">Teacher</a>
        <a href="<?= base_url()?>Welcome/students">Students</a>
        <a href="#">Courses</a>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1):?>
        <a href="<?= base_url()?>Welcome/users">Users</a>
        <?php endif;?>
        <a href="<?= base_url()?>Welcome/logout">Logout</a>
    </div>

    <div class="w3-container">
        <h2>Students Management Table</h2> 
        <p style="font-size:14px;"><?php print_r($_SESSION['name']);?> - Last Login : <?php print_r($_SESSION['last_login']);?></p>
        <p style="font-size:14px;">
            <button style="background:blue;border:1px solid blue;color:#fff;padding:3px 10px;cursor:pointer;font-size:12px;" onclick="window.location.href='<?= base_url()?>Welcome/add_student'">Add Student</button> &nbsp; <button style="background:green;border:1px solid green;color:#fff;padding:3px 10px;cursor:pointer;font-size:12px;" onclick="window.location.href='<?= base_url()?>Welcome/logout'">Logout</button>
        </p>
        
        <table class="w3-table w3-striped w3-border w3-hoverable w3-table-all w3-centered" style="border:2px solid #66ff66;font-size:14px;">
            <thead>
                <tr class="w3-grey">
                    <th>No</th>
                    <th>NIS</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Grade</th>
                    <th>Join Date</th>
                    <th>Last Login</th>
                    <th>Score</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($students as $st):
                ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $st['nis']?></td>
                    <td><?= $st['fullname']?></td>
                    <td><?= $st['email']?></td>
                    <td><?= $st['address']?></td>
                    <td><?= $st['phone']?></td>
                    <td><?= $st['grade']?></td>
                    <td><?= $st['date_created']?></td>
                    <td><?= $st['last_login']?></td>
                    <td><?= $st['score']?></td>
                    <td>
                        <button onclick="window.location.href='<?= base_url()?>Welcome/update_student/<?= $st['id']?>'" style="background:lightblue;border:1px solid lightblue;cursor:pointer;padding:4px 10px;color:#030303;font-size:12px;">Update</button> &nbsp; <button style="background:red;border:1px solid red;cursor:pointer;padding:4px 10px;color:#fff;font-size:12px;" onclick="window.location.href='<?= base_url()?>Welcome/delete_student/<?= $st['id']?>'">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    
    </div>
</body>
</html>