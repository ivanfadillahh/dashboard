<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .in-add{
            font-size:12px;
            width:200px;
        }
    </style>
</head>
<body style="padding-left:15px;padding-top:15px;">
    <div class="w3-container">
        <h2>Form Update User</h2>
        <p style="padding-bottom:20px;">
            <a style="text-decoration:none;font-size:16px;" href="<?= base_url()?>Welcome/users"><< back to Users Panel</a>
        </p>
        <form action="<?= base_url()?>Welcome/do_update_user" method="post">
            <input type="hidden" name="id" value="<?= $id?>">

            <label for="address">Old Password :</label><br>
            <input required class="in-add" type="password" name="old_pass" placeholder="Insert old password..."><br><br>

            <label for="phone">New Password :</label><br>
            <input required class="in-add" type="password" name="password" placeholder="Insert new password..."><br><br><br>

            <button type="submit" style="background-color:#ff471a;border:2px solid #ff471a;border-radius:3px;padding:5px 15px;font-size:12px;color:#fff;cursor:pointer;">Update Data</button>
        </form> 
    </div>
</body>
</html>