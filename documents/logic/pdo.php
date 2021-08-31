<?php
// 1) connect to database - اتصال بقاعدة البيانات
$username = "U54Wysy9Sq";
$password = "0ka02TEh8H";
$database = new PDO("mysql:host=remotemysql.com; dbname=U54Wysy9Sq;", $username, $password);


function insertSingleRow($name, $gender, $age, $number, $social, $city, $gradute, $position, $nationality, $Political, $des1, $des2, $des3)
{
    $username = "U54Wysy9Sq";
    $password = "0ka02TEh8H";
    $database = new PDO("mysql:host=remotemysql.com; dbname=U54Wysy9Sq;", $username, $password);

    $links = array(
        ':name'         => $name,
        ':gender'       => $gender,
        ':age'          => $age,
        ':number'       => $number,
        ':social'       => $social,
        ':city'         => $city,
        ':gradute'      => $gradute,
        ':position'     => $position,
        ':nationality'  => $nationality,
        ':Political'    => $Political,
        ':des1'         => $des1,
        ':des2'         => $des2,
        ':des3'         => $des3
    );

    $sql = 'INSERT INTO `links` (
                name ,       
                gender,
                age,
                number,
                social,
                city,
                gradute,
                position,
                nationality,
                Political,
                des1,
                des2,
                des3   
              )
              VALUES (
                :name,       
                :gender,
                :age,
                :number,
                :social,
                :city,
                :gradute,
                :position,
                :nationality,
                :Political,
                :des1,
                :des2,
                :des3
              );';

    print_r($links);

    $q = $database->prepare($sql);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    return $q->execute($links);
}
