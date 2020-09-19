<?php
/*
 *  This PHP code should return the exact result as "http://www.exam.off/api/contacts.api.asp?id=[X]"
 *
 */

// *** remove this echo message where start editing *** !!!
echo "Welcome to PHP exam!"; 
// *** ============================================= *** !!!

// === TODO: 1. get the id from the url parameters ===
// 
// ================================================

// connect to the db
$connectionString = array("Server" => "192.168.10.64", "UID" => "test10", "PWD" => "test10", "Database" => "test10");
$conn = new PDO("sqlsrv:Server=".$connectionString["Server"].";Database=".$connectionString["Database"], $connectionString["UID"], $connectionString["PWD"]);

// === TODO: 2. get the conracts, using an SQL query ===
//
// =====================================================

// close the db connection
unset($conn);

// === TODO: 3. output the result ===
//
// ============================
?>
