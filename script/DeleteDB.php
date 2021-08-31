<?php
include 'connectDB.php';
  // Create database
  $sql = "DROP DATABASE Awareness";
  if ($connD->query($sql) === TRUE) {
    
  }
  include 'Deleted.html';
