<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
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
        <h2>Form Update Student</h2>
        <p style="padding-bottom:20px;">
            <a style="text-decoration:none;font-size:16px;" href="<?= base_url()?>Welcome/dashboard"><< back to Homepage</a>
        </p>
        <form action="<?= base_url()?>Welcome/do_update_student" method="post">
            <input type="hidden" name="id" value="<?= $id?>">
            <label for="fullname">Fullname :</label><br>
            <input required class="in-add" type="text" name="fullname" placeholder="Insert fullname..."><br><br>

            <label for="address">Address :</label><br>
            <input required class="in-add" type="text" name="address" placeholder="Insert address..."><br><br>

            <label for="phone">Phone Number :</label><br>
            <input required class="in-add" type="number" name="phone" placeholder="Insert phone number..."><br><br><br>

            <button type="submit" style="background-color:#ff471a;border:2px solid #ff471a;border-radius:3px;padding:5px 15px;font-size:12px;color:#fff;cursor:pointer;">Update Data</button>
        </form> 
    </div>
</body>
</html>