<?php

require_once __DIR__.'../functions/sql.php';

/**
 * @return array
 */
function Photos_getAll(){


    $sql = 'SELECT * FROM images';
    $res = mysql_query($sql);
    $ret = [];
    while (false !== $row = mysql_fetch_assoc($res)){
        $ret[] = $row;
    }
    return $ret;
}

function Photos_insert ($data){

}