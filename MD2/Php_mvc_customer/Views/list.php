<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class='table'>
        <thead class='thead-light'>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Name</th>
                <th scope='col'>Email</th>
                <th scope='col'>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persons as $key => $person) : ?>
                <tr>
                    <th scope='row'><?php echo $key + 1 ?></th>
                    <td><?php echo $person->getName() ?></td>
                    <td><?php echo $person->getEmail() ?></td>
                    <td><?php echo $person->getPhone() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>