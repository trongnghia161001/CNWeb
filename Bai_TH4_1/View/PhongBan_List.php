<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phòng ban</title>
</head>
<body>
    <h2>Danh sách phòng ban:</h2>
    <?php
    foreach($phongbanList as $phongban) {
        echo"<p><a href='?IDPB=" .$phongban ->IDPB ."'>".$phongban->Tenpb ."</a></p>";
    }
    ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>