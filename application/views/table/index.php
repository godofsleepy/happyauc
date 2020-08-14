<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <Table>
        <?php foreach ($users as $user) {
            echo $user->name;
        } ?>
    </Table>

</body>

</html>