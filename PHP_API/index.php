<?php

require_once ("config.php");


$db = new DB("127.0.0.1", "test", "root", "");

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo json_encode($db->query("SELECT * FROM address"));
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "POST";
} else {
    http_response_code(405);
}
?>