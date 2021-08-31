<?php
include 'DB.php';
// Create Table
include 'connectTable.php';


$USERS = "CREATE TABLE Users (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    User_Name VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL

    )";
if ($connT->query($USERS) === TRUE) {
}

$x = "Admin";
$password = md5($x);

$adduser = "INSERT INTO Users (User_Name, Password)
    VALUES ('Admin', '$password')";
if ($connT->query($adduser) === TRUE) {
}

//Create Image Table

$Images = "CREATE TABLE Images (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  File_Name VARCHAR(50) NOT NULL UNIQUE

  )";
if ($connT->query($Images) === TRUE) {
}

$social = "CREATE TABLE Social (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  value VARCHAR(50) NOT NULL

  )";
if ($connT->query($social) === TRUE) {
}

$news = "CREATE TABLE News (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  description VARCHAR(250) NOT NULL,
  date VARCHAR(50) NOT NULL,
  File_Name VARCHAR(50) NOT NULL UNIQUE
  )";
if ($connT->query($news) === TRUE) {
}
$statement = "CREATE TABLE statement (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  description VARCHAR(50) NOT NULL,
  number VARCHAR(50) NOT NULL UNIQUE
  )";
if ($connT->query($statement) === TRUE) {
}
$Speaker = "CREATE TABLE speaker (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  description VARCHAR(50) NOT NULL,
  File_Name VARCHAR(50) NOT NULL UNIQUE
  )";
if ($connT->query($Speaker) === TRUE) {
}
$Speakers = "CREATE TABLE speakers (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  link VARCHAR(50) NOT NULL,
  description VARCHAR(50) NOT NULL
  )";
if ($connT->query($Speakers) === TRUE) {
}
$Parliament = "CREATE TABLE parliament (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  link VARCHAR(50) NOT NULL,
  description VARCHAR(50) NOT NULL
  )";
if ($connT->query($Parliament) === TRUE) {
}
$event = "CREATE TABLE event (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  title VARCHAR(50) NOT NULL,
  location VARCHAR(50) NOT NULL,
  date VARCHAR(50) NOT NULL,
  description VARCHAR(50) NOT NULL
  )";
if ($connT->query($event) === TRUE) {
}
$library = "CREATE TABLE library (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50) NOT NULL,
  description VARCHAR(50) NOT NULL,
  link VARCHAR(50) NOT NULL,
  File_Name VARCHAR(50) NOT NULL UNIQUE
  )";
if ($connT->query($library) === TRUE) {
}
$connD->close();
include 'Created.html';
