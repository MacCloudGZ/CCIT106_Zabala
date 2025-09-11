<!DOCTYPE html>
<html lang="en">
<head>
    <title>List of Users</title>
</head>
<body>
    <h1>List of Users</h1>
    <?php if(session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['firstname'] ?></td>
            <td><?= $user['middlename'] ?></td>
            <td><?= $user['lastname'] ?></td>
            <td>
                <a href="#">Edit</a> | 
                <a href="<?= base_url('users/delete/'.$user['id']) ?>"onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>