<?php

function sqlGet(PDO $db, $column, $from, $where){
    $result = $db->query("SELECT " . $column . " FROM " . $from . " WHERE " . $where)->fetch();
    return $result[$column];
}

function comparePassword(PDO $db, $userName, $password){
    $comparePassword = sqlGet($db, "password", "accounts", "userName='" . $userName . "'");
    if( $comparePassword == $password){
        return true;
    }else{
        return false;
    }
}