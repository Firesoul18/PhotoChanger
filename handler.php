<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Photos</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        $targetDir = "\\uploads\\"; // Directory to store uploaded files
        $targetFile = __DIR__ . $targetDir . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
           
    }
    ?>
</body>

</html>