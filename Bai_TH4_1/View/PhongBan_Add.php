<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phòng ban</title>
</head>
<body>
    <h2>Thêm phòng ban: </h2>
    <form action="C_PhongBan.php" method="post">
        <table>
            <tr>
                <td>IDPB: </td>
                <td><input type="text" name="IDPB"></td>
            </tr>
            <tr>
                <td>Tên phòng ban: </td>
                <td><input type="text" name="Tenpb"></td>
            </tr>
            <tr>
                <td>Mota: </td>
                <td><input type="text" name="Mota"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="insertt" value="Insert"></td>
            </tr>
        </table>
    </form>
</body>
</html>