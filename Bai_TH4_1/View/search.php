<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tìm kiếm</title>
  <link rel="stylesheet" href="timkiem.css" />
  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    * {
      margin: 0;
      padding: 0;
      font: inherit;
    }

    body {
      line-height: 1.5;
    }

    img,
    picture,
    video,
    canvas,
    svg {
      display: block;
      max-width: 100%;
    }

    input,
    button,
    textarea,
    select {
      outline: none;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      overflow-wrap: break-word;
    }

    .main {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border: 1px solid #ccc;
      padding: 80px;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
    }

    h4 {
      font: 1em sans-serif;
      font-weight: 500;
      display: inline-block;
      position: relative;
      left: 50%;
      transform: translateX(-50%);
      margin-bottom: 20px;
    }

    div {
      position: relative;
      margin-bottom: 5px;
    }

    input[type="radio"] {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      cursor: pointer;
    }

    input[type="text"] {
      padding: 3px;
      margin-left: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    button {
      display: inline-block;
      position: relative;
      left: 40%;
      transform: translateX(-50%);
      padding: 5px 10px;
      border: none;
      margin-top: 10px;
    }

    button:hover {
      cursor: pointer;
      color: #ccc;
      background-color: black;
    }
  </style>
</head>

<body>
  <div class="main">
    <h4>Tìm kiếm thông tin phòng ban</h4>
    <form action="C_PhongBan.php" method="post">
      <div class="IDPB">
        <label for="IDPB">IDPB</label>
        <input type="radio" name="timkiem" id="IDPB" value="IDPB" />
      </div>
      <div class="Tenpb">
        <label for="Tenpb">Tên phòng ban</label>
        <input type="radio" name="timkiem" id="Tenpb" value="Tenpb" />
      </div>
      <div class="Mota">
        <label for="Mota">Mô tả</label>
        <input type="radio" name="timkiem" id="Mota" value="Mota" />
      </div>
      <div class="nhapvaothongtin">
        <label for="nhapvaothongtin">Nhập vào thông tin</label>
        <input type="text" name="nhapvaothongtin" id="nhapvaothongtin" autofocus />
      </div>
      <button type="submit" name="submit">Submit</button>
      <button type="reset">Reset</button>
    </form>
  </div>
</body>

</html>