<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>検索結果</title>
        <link rel="STYLESHEET" href="todo.css" type="text/css">
    </head>
    <body>
        <h1>検索結果</h1>
        <hr>
        <table border="0">
            <tr>
                <form action="list.html">
                    <td>
                        <input type="submit" value="戻る">
                    </td>
                </form>
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
                    △△△
                </td>
                <td>
                    ×××
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
        <table border="0">
            <tr>
                <form action="list.html">
                    <td>
                        <input type="submit" value="戻る">
                    </td>
                </form>
            </tr>
        </table>
    </body>
</html>