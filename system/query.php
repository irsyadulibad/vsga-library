<?php

function create_user($data)
{
    global $conn;
    $conn->prepare("INSERT INTO users (name, email, password, address) VALUES (?, ?, ?, ?)")
        ->execute([
            $data["name"],
            $data["email"],
            password_hash($data["password"], PASSWORD_DEFAULT),
            $data["address"],
        ]);
}

function get_user($email)
{
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    return $stmt->fetch(PDO::FETCH_OBJ);
}
