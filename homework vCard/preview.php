<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="theme/<?= $_SESSION['info']['layout'] ?>.css">
<!-- <?= print_r($_SESSION); ?> -->

<body >

  <div style="background-image: url(upload/iig1.jpg)" class="card-main">
    <div id="triangle">
      <img src="upload/<?= $_SESSION['info']['who'] ?>" class="who">
    </div>
    <h2><span class="clr"><?= $_SESSION['info']['user'] ?></span></h2>

    <h4 class="clr" style="letter-spacing:10px"><?= $_SESSION['info']['title'] ?></h4>
    <p style="font-size:15px;"><?= $_SESSION['info']['skill'] ?></p>
    <!-- <?= print_r($_FILES) ?> -->
  <div style="display:flex;justify-content:space-between">
    <div class="font"><span><?= $_SESSION['info']['mail']?><br><?= $_SESSION['info']['number']?></span></div>
    <div ><img src="upload/<?= $_SESSION['info']['QR'] ?>" class="QR">  </div>
    </div>
  </div>
   </div>
  <div style="width:200px;margin:auto;"><button style="margin:50px;display:block;" onclick="window.history.go(-1)">回頁面</button>
  </div>
</body>

<!-- letter-spacing間距 -->


</html>