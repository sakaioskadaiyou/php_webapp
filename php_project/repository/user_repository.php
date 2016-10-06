<?php

// serviceファイル読み込み
require_once '../infrastructure/db_connection_mgt.php';

/**
* userに対応するpasswordを返却
*/
function find_pass($user_id) {

    // DB接続
    $db = get_db_connect();
    
    // SQL生成
    $sql = 'select password from user where id = \'' . $user_id . '\'';
    //$sql = 'select password from user where id = \'aaa\'';
    
    // 返却用配列
    $data = array();
    
    //クエリ実行
    if ($result = $db->query($sql)) {
       while ($row = $result->fetchArray()) {
           $data[] = $row;
       }
    }
    
    //DB切断
    close_db_connect($db);
    
    return $data;

}
