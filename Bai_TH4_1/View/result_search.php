<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết phòng ban</title>
</head>
<body>
    <?php
    echo '<table border="1" width="100%">';
    echo '<caption>Du lieu bang PHONG BAN</caption>';
    echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><</TR>';
    while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        echo '<TR><TD>' . $row['IDPB'] . '</TD><TD>' . $row['Tenpb'] . '</TD><TD>' . $row['Mota'] . '</TD><TR>';
    }
    echo '<TABLE>';
    ?>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>