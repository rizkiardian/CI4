<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>email</th>
            <th>password</th>
            <th>id_level</th>
        </tr>
        <?php foreach($user as $key): ?>
        <tr>
            <td><?= $key->email ?></td>
            <td><?= $key->password ?></td>
            <td><?= $key->id_level ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>