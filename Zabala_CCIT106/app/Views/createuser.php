<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create User Forms</h1>
    <form action="<?=base_url('users/store') ?>" method="post">
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" required><br>
        <label for="middlename">MiddleName:</label>
        <input type="text" id="middlename"><br>
        <label for="lastname">lastname:</label>
        <input type="text" id="lastname" required><br>
        <input type="submit" value="Create User">
    </form>
</body>
</html>