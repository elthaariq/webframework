<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="/css/my-style.css" rel="stylesheet"
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php
        foreach ($mahasiswa as $nama) {
        echo "<li> $nama </li>";}
        ?>
    </ol>
    <div>
        <img src="/img/people01.jpg">
        <img src="/img/people02.jpg">
        <img src="/img/people03.jpg">
        <img src="/img/people04.jpg">
        <img src="/img/people05.jpg">
    </div>
    <div>
        Copyright © <?php echo date("Y"); ?> ESQ Business School
    </div>
</body>
</html>