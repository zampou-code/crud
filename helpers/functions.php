<?php

function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function set_input($key, $value) {
    $_SESSION['input'][$key] = $value;
}

function get_input($key) {
    return !empty($_SESSION['input'][$key]) ? $_SESSION['input'][$key] : null;
}

function clear_input() {
    if (isset($_SESSION['input'])) {
        $_SESSION['input'] = [];
    }
}

function not_empty($fields = []) {
    if (count($fields) != 0) {
        foreach ($fields as $field) {
            if (empty($_POST[$field]) or trim($_POST[$field]) == '') {
                return false;
            }
        }
        return true;
    }
    return false;
}

function json($payload = []) {
    echo json_encode($payload);
    exit();
}
