<?php
function connect(){
    $db = new SQLite3('data.db');
    $create = $db->query("CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY AUTOINCREMENT,login TEXT NOT NULL UNIQUE,email TEXT NOT NULL UNIQUE,password TEXT NOT NULL,first_name TEXT,last_name TEXT,age INTEGER,class INTEGER,class_letter TEXT,interests TEXT);");
    echo 'connect db';
    return $db; }
?>
