<?php 

function checkIfEmailExists(string $email, mysqli $mysql)
{
    $query = "
        SELECT `id` FROM `users`
        WHERE
        `email` = '{$email}'
    ";
    $result = $mysql->query($query)?->fetch_assoc();

    return !empty($result);
}

function registerNewUser(string $name, string $email, string $password, mysqli $mysql)
{
    $query = "
        INSERT INTO `users`
        (`name`, `email`, `password`)
        VALUES
        ('{$name}', '{$email}', '{$password}')
    ";
    $result = $mysql->query($query);
    
    if($result) {
        return $mysql->insert_id;
    }
    return false;
}

function fetchUserDataById(int $id, mysqli $mysql)
{
    $query = "
        SELECT * FROM `users`
        WHERE
        `id` = '{$id}'
    ";
    $result = $mysql->query($query)?->fetch_assoc();

    return $result;
}

function fetchUserDataByEmail(string $email, mysqli $mysql)
{
    $query = "
        SELECT * FROM `users`
        WHERE
        `email` = '{$email}'
    ";
    $result = $mysql->query($query)?->fetch_assoc();

    return $result;
}

function updateUserDataById(int $id, string $name, string $email, string $password, mysqli $mysqli)
{
    $query = "
        UPDATE `users`
        SET
        `name` = '{$name}',
        `email` = '{$email}',
        `password` = '{$password}'
        WHERE
        `id` = '{$id}'
        LIMIT 1
    ";
    $result = $mysqli->query($query);

    return $result;
}