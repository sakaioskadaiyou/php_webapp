<?php

// serviceファイル読み込み
require_once '../repository/user_repository.php';

function login($user_id, $password) {

    $pass_data = array();
    $pass_data = find_pass($user_id);
    
    if (in_array($password, $pass_data)) {
        return TRUE;
    } else {
        return FALSE;
    }

}
