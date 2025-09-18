<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="<?=base_url('users/edit/'.$user['id']) ?>" method="post">
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname" value="<?= $user['firstname']?>"><br>
        <label for="middlename">MiddleName:</label>
        <input type="text" id="middlename" name="middlename" value="<?= $user['middlename']?>"><br>
        <label for="lastname">lastname:</label>
        <input type="text" id="lastname" name="lastname" value="<?= $user['lastname']?>"><br>
        <input type="submit" value="Create User">
    </form>
</body>
</html>