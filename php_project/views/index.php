<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ログイン</title>
        <!-- BootstrapのCSS読み込み -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery読み込み -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- BootstrapのJS読み込み -->
        <script src="./js/bootstrap.min.js"></script>
        </head>
    <body>
        <h1>ログイン</h1>
        <hr>
        <div class="container">
        <div class="table-responsive">
        <div align="center">
            <table border="0" class="table table-striped table-bordered table-hover table-condensed">
                <form action="/controller/login.php" method="post">
                    <tr>
                        <th>
                            ユーザID
                        </th>
                        <td>
                            <input type="text" name="user_id" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            パスワード
                        </th>
                        <td>
                            <input type="password" name="password" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="ログイン">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        </div>
        </div>
    </body>
</html>