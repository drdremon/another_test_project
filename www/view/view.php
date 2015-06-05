<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<table border="1">
    <tr>
        <th>Название</th>
        <th>Картинка</th>
    </tr>


    <?php foreach($items as $item): ?>

    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><img src="<?php echo $item['path'];?>" style="max-width: 200px"</td>
    </tr>

    <?php endforeach; ?>


</table>

<a href="/add.php">Добавить фото</a>

</body>
</html>