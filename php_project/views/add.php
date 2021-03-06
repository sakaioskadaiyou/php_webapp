<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>作業登録</title>
        <link rel="STYLESHEET" href="todo.css" type="text/css">
    </head>
    <body>
        <h1>作業登録</h1>
        <hr>
        <div align="center">
            <table border="0">
                <form action="../controller/add.php">
                    <tr>
                        <th class="add_field">
                            項目名
                        </th>
                        <td class="add_field">
                            <input type="text" name="task" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <th class="add_field">
                            担当者
                        </th>
                        <td class="add_field">
                            <input type="text" name="name" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <th class="add_field">
                            期限
                        </th>
                        <td class="add_field">
                            <input type="text" name="year" value="" size="8">/<input type="text" name="month" value="" size="4">/<input type="text" name="day" value="" size="4">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="add_button">
                            <table border="0">
                                <tr>
                                    <td>
                                        <input type="submit" value="登録">
                                    </td>
                                    </form>
                                    <form action="../controller/list.php">
                                    <td>
                                        <input type="submit" value="キャンセル">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>