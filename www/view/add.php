<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="/add.php" method="post" enctype="multipart/form-data">
    <label for="title">Название</label>
    <input type="text" id="title" name="title">
    <br/>
    <label for="image">Файл</label>
    <input type="file" id="image" name="image">
    <input type="submit">
</form>

<a href="/">На главную</a>
</body>
</html>