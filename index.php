<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!--  Head[End] 
        Main[Start] -->
    <form method="POST" action="insert.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <fieldset>
                <legend>image画像登録</legend>
                <br>
                <label for="img">
                    <p>アップロード画像</p><input type="file" name="image" id="image-input"><br>
                    <div id="tmp-img"><img id="preview" src="" alt="" accept="image/*"></div>
                </label><br><label>コメント<textArea name="naiyou" rows="4" cols="40"></textArea></label><br><input
                    type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    < !-- Main[End] -->
        <script src="./js/image-preview.js"></script>
</body>

</html>