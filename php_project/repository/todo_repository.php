<?php

// serviceファイル読み込み
require_once '../infrastructure/db_connection_mgt.php';

/**
* userに対応するpasswordを返却
*/
function insert_todo($task, $name, $date) {

    // DB接続
    $db = get_db_connect();
    
    // SQL生成
    $sql = 'insert into todo values(\'' . $task . '\', \'' . $name . '\', \'' . $date . '\')';
    print $sql
    
    //クエリ実行
    if ($db->query($sql)) {
        //DB切断
        close_db_connect($db);
        return TRUE;
    } else {
        //DB切断
        close_db_connect($db);
        return FALSE;
    }

}
