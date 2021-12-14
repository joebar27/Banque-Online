<?php
require "model/connexion.php";

// Function used to log the user
function get_user_by_login($db, $post_data) {
  $query = $db->prepare("SELECT * FROM customers WHERE login = :login");
  $query->execute([
    "login" => $post_data["login"]
  ]);
  return $query->fetch(PDO::FETCH_ASSOC);
}