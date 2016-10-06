<?php

// serviceファイル読み込み
require_once '../service/login_service.php';

$err_msg = array(); // エラーメッセージ用配列

// リクエストメソッド取得
$request_method = $_SERVER['REQUEST_METHOD'];

if ($request_method === 'POST') {

    // POST値取得
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    if (login($user_id, $password) == TRUE) {
        include_once '../views/list.php';
        exit;
    }

}

$err_msg[] = 'パスワードもしくはユーザIDが間違っています。';
include_once '../views/error.php';
