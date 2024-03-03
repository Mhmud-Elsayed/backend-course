<?php
session_start();
$users = [
    [
        "id" => 1,
        "fname" => "mahmoud",
        "lname" => "elsayed",
        "salary" => 18000,
        "email" => "mahmoud@gmail.com",
        "is_active" => "true"
    ],
    [
        "id" => 2,
        "fname" => "ahmed",
        "lname" => "ali",
        "salary" => 8500,
        "email" => "ahmed@gmail.com",
        "is_active" => "false"
    ],
    [
        "id" => 3,
        "fname" => "youseff",
        "lname" => "ibrahim",
        "salary" => 3000,
        "email" => "youseff@gmail.com",
        "is_active" => "true"
    ],
    [
        "id" => 4,
        "fname" => "omar",
        "lname" => "mohammed",
        "salary" => 8000,
        "email" => "omar@gmail.com",
        "is_active" => "true"
    ],
    [
        "id" => 5,
        "fname" => "ziad",
        "lname" => "hassan",
        "salary" => 25000,
        "email" => "ziad@gmail.com",
        "is_active" => "true"
    ],
    [
        "id" => 6,
        "fname" => "joe",
        "lname" => "joe",
        "salary" => 10000,
        "email" => "joe@gmail.com",
        "is_active" => "true"
    ],
    [
        "id" => 7,
        "fname" => "yasser",
        "lname" => "ahmed",
        "salary" => 4000,
        "email" => "yasser@gmail.com",
        "is_active" => "false"
    ],
    [
        "id" => 8,
        "fname" => "eyad",
        "lname" => "taha",
        "salary" => 6000,
        "email" => "eyad@gmail.com",
        "is_active" => "true"
    ],
    [
        "id" => 9,
        "fname" => "arwa",
        "lname" => "malek",
        "salary" => 9000,
        "email" => "arwa@gmail.com",
        "is_active" => "true"
    ],
    [
        "id" => 10,
        "fname" => "nour",
        "lname" => "hallem",
        "salary" => 13000,
        "email" => "nour@gmail.com",
        "is_active" => "flase"
    ],
];

function print_users($arr)
{
    foreach ($arr as $key => $value) {

        echo $value["id"] . "-" . $value["fname"] .
            " " . $value["lname"] . "-" . $value["salary"]
            . "," . $value["email"] . "-->" . $value["is_active"]
            . "." . "<br>";
    }
}
// print_users($users);

function users_level($arr)
{
    foreach ($arr as $key => $value) {
        if ($value["salary"] < 5000) {
            echo $value["id"] . $value["fname"] . " is junior " . "<br>";
        } elseif ($value["salary"] > 5000 && $value["salary"] < 10000) {
            echo $value["id"] . $value["fname"] . " is senior " . "<br>";
        } else {
            echo $value["id"] . $value["fname"] . "   is Tech Lead " . "<br>";
        }
    }
}

// users_level($users);
function printActiveUsers($arr)
{

    foreach ($arr as $key => $value) {
        if ($value["is_active"] == "true") {
            echo $value["fname"] . " is Active" . "<br>";
        } else {
            echo $value["fname"] . " is Inactive" . "<br>";
        }
    }
}

// printActiveUsers($users);
function storesActiveUsers($arr)
{
    foreach ($arr as $key => $value) {
        if ($value["is_active"] == "true") {
            $_SESSION["activeUsersIds"][] = $value["id"]; //storing the ids in array beacause it was store only the last id 
        }
    }
}
// storesActiveUsers($users);

// var_dump($_SESSION["activeUsersIds"])  ;

