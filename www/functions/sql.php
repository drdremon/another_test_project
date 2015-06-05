<?php

function Sql_connect(){
    mysql_connect('localhost','root','');
    mysql_select_db('testing');
}