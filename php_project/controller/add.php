<?php
 
// serviceファイル読み込み
require_once '../repository/todo_repository.php';

// 変数初期化
$task = ''; 
$name = ''; 
$year = ''; 
$month = ''; 
$day = '';
$date = '';
$err_msg = array(); // エラーメッセージ用配列

// リクエストメソッド取得
$request_method = get_request_method();
 
if ($request_method === 'POST') {
 
    // POST値取得
    $task = get_post_data('task');
    $name = get_post_data('name');
    $year = get_post_data('year');
    $month = get_post_data('month');
    $day = get_post_data('day');
    $date = $year . $month . $day;
    
    //TODO入力チェック
    
    //TODO登録
    if (insert_todo($task, $name, $date) == TRUE) {
        include_once '../views/list.php';
        exit;
    }
}

$err_msg[] = 'TODOの登録に失敗しました。';
include_once '../views/error.php';
