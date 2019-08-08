<?php
/**
 * Establish a connection to database server.
 */
// try {
//     $db = new PDO('mysql:host='.SERVER_NAME.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//     $db->exec('SET NAMES utf8'); // Unicode Arabic Language
// } catch (PDOException $e) { // throw new exception
//     die($e->getMessage());
// }


// Server Data
define('SERVER_NAME', 'localhost'); // Server name
define('DB_NAME', 'pagination_db'); // Database Name
define('DB_USER', 'root'); // Database User
define('DB_PASSWORD', ''); // Database Password
define('DSN','mysql:host='.SERVER_NAME.';dbname='.DB_NAME);


try {
    $db = new PDO(DSN, DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    $db->exec('SET NAMES utf8'); // Unicode Arabic Language
} catch (PDOException $e) { // throw new exception
    die($e->getMessage());
}
