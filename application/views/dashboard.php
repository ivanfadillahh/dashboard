<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Panel</title>

</head>
<body style="text-align:center;">

    <h2>Students Management Table</h2> 
    <p style="font-size:14px;">
        <a style="text-decoration:none;" href="<?= base_url()?>Welcome/add_student">Add Student</a> | <a style="text-decoration:none;" href="<?= base_url()?>Welcome/logout">Logout</a> 
    </p>

    <table style="border:2px solid #66ff66;margin-left:25%;font-size:14px;">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
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
                    <a style="text-decoration:none;" href="<?= base_url()?>Welcome/update_student/<?= $st['id']?>">Update</a> | <a style="text-decoration:none;" href="<?= base_url()?>Welcome/delete_student/<?= $st['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p style="font-size:14px;font-weight:bold;">
        <?php print_r($_SESSION['name']);?> - Last Login : <?php print_r($_SESSION['last_login']);?>
    </p>

</body>
</html>