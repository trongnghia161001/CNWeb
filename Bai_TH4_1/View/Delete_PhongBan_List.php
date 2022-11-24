
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa phòng ban</title>
</head>
<body>
    <h2>Xóa phòng ban:</h2>
    <?php
    for($i = 1; $i <= sizeof($phongbanList); $i++)   
    {
        echo"<p><a href='?pbid_del=" .$phongbanList[$i] ->IDPB ."'>".$phongbanList[$i]->Tenpb ."</a></p>";
    }
    ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>