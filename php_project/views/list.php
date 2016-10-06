<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>作業一覧</title>
        <link rel="STYLESHEET" href="todo.css" type="text/css">
    </head>
    <body>
        <h1>作業一覧</h1>
        <hr>
        <!-- 作業登録・検索 -->
        <table border="0" width="90%" class="toolbar">
            <tr>
                <form action="views/add.php">
                    <td>
                        <input type="submit" value="作業登録">
                    </td>
                </form>
                <td align="right">
                    <table border="0">
                        <tr>
                            <td>
                                検索キーワード
                            </td>
                            <form action="controller/add.php">
                                <td>
                                    <input type="text" name="keyword" value="" size="24">
                                </td>
                                <td>
                                    <input type="submit" value="検索">
                                </td>
                            </form>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table border="0" width="90%" class="list">
            <tr>
                <th>
                    項目名
                </th>
                <th>
                    担当者
                </th>
                <th>
                    期限
                </th>
                <th>
                    完了
                </th>
                <th colspan="3">
                操作
                </th>
            </tr>
            <tr>
                <td>
                a
                </td>
                <td>
                a
                </td>
                <td>
                    YYYY/MM/DD
                </td>
                <td>
                    未 or YYYY/MM/DD
                </td>
                <form action="list.html">
                    <td align="center">
                        <input type="submit" value="完了">
                    </td>
                </form>
                <form action="edit.html">
                    <td align="center">
                        <input type="submit" value="更新">
                    </td>
                </form>
                <form action="delete.html">
                    <td align="center">
                        <input type="submit" value="削除">
                    </td>
                </form>
            </tr>
        </table>
    </body>
</html>