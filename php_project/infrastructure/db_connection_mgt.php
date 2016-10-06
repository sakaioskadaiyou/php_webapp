<?php

// 設定ファイル読み込み
require_once '../resouse/db_setting.php';

/**
* DBハンドルを取得
*/
function get_db_connect() {

    // コネクション取得
    try {
        $db = new SQLite3(SQLITE_DB_DIR);
    } catch (Exception $e) {
        print 'DBへの接続でエラーが発生しました。<br>';
        print $e->getTraceAsString();
        die();
    }
    return $db;
}

/**
* DBとのコネクション切断
*/
function close_db_connect($db) {
    // 接続を閉じる
    $db->close();
}

