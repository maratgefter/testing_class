<?php
require '../vendor/autoload.php';

use TexLab\MyDB\DbEntity;
use TexLab\MyDB\DB;

$link = DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'mydb'
]);

$table1 = new DbEntity('table1', $link);

//echo json_encode($table1->get());

// print_r($table1->get());

// $table1->add([
//     'fio' => 'Peter',
//     'age' => '1',
//     'mail' => '@peter',
//     'phone_number' => '+375',
//     'opinion' => 'Director',
//     'mark' => '5'
// ]);

print_r($table1->get(['id' => 54]));