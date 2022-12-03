<?php 

session_start();

function isLogged() 
{
    return isset($_SESSION['userId']);
}

function generateAuthenticatedSession(int $userId) 
{
    session_regenerate_id();
    $_SESSION['userId'] = $userId;
}

function getAuthenticatedUserId() 
{
    return $_SESSION['userId'] ?? null;
}

function logout()
{
    session_regenerate_id();
    unset($_SESSION['userId']);
}