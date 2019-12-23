<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .main {
        margin: 5% auto;
        text-align: center;
        width: 400px;
    }

    .data {
        text-align: left;
        padding: 0 35px;
        border: gray 2.5px solid;
    }
    .top1{
    width:100%;
    height:300px;
    overflow: hidden;
    text-align: center;

}

    img {
      width:100%;
      height:100%;
      object-fit: cover;
      /* margin:0px 30% ; */
  
    }
      /* 小屏幕（平板，大于等于 768px） */
 @media (max-width: 600px) {

.main {
    width: 500px;
    border-right: 2px solid #57abff;
}

}

</style>

<body>
    <div class="top1"><img src="images/car.jpg"></div>
    <div class='main'>
        <h1>VCard產生器</h1>
        <form action="api.php" method="post" enctype="multipart/form-data">
            <div class="data">
                <p>你的名字 | <input type="text" name="user" value="叫我工程師"></p>
                <p>職位名稱 | <input type="text" name="title" value="網頁設計師"></p>
                <p> <span style="vertical-align:top">技能說明 | </span>
                    <textarea name="skill" cols=30 rows=10> HTML/CSS網頁概念基礎,PHP/MySQL資料處理,JS/JQ前端網頁設計,AI/PS平片影像處理,UI/UX設計規劃</textarea>
                </p>
                <P>email:<input type="text" name="mail" value="mvp198932@gmail.com"></P>
                <P>phone:<input type="text" name="number" value="0930123456"></P>
                <hr>
                <p>人物照: <input type="file" name="who"> </p>
                <p>QR-code: <input type="file" name="QR"> </p>
                <!-- <?= print_r($_FILES); ?> -->
                <p>版型選擇:
                    <select name="layout">
                        <option value="g" selected>gg</option>
                        <option value="p" selected>pg</option>
                        <!-- <option value=""></option> -->
                        <!-- <option value=""></option> -->
                    </select>
                </p>
            </div>
            <br>
            <input type="submit" value="送出預覽">
        </form>
    </div>



</body>

</html>