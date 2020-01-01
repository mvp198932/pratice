<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        background: #fff;
        background: linear-gradient(top, #ffffff, rgba(51, 51, 51, 0)),
            url("upload/1111.jpg") center bottom no-repeat;
        background: -moz-linear-gradient(top, #ffffff, rgba(51, 51, 51, 0)),
            url("upload/1111.jpg") center bottom no-repeat;
        background: -webkit-linear-gradient(top, #ffffff, rgba(51, 51, 51, 0)),
            url("upload/1111.jpg") center bottom no-repeat;
        background-size:cover;
        background-attachment: fixed;
            }

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

</style>

<body>
    <div class='main'>
        <h1>VCard產生器</h1>
        <form action="api.php" method="post" enctype="multipart/form-data">
            <div class="data">
                <p>你的名字 | <input type="text" name="user" value="叫我工程師"></p>
                <p>職位名稱 | <input type="text" name="title" value="網頁設計師"></p>
                <p> <span style="vertical-align:top">技能說明 | </span>
                    <textarea name="skill" cols=40 rows=10> HTML/CSS網頁概念基礎,PHP/MySQL資料處理,JS/JQ前端網頁設計,AI/PS平片影像處理,UI/UX設計規劃</textarea>
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