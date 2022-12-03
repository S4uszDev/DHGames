<?php 

function connectToDatabase()
{
    $errorDesc = null;

    try {
        $mysql = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PWD, MYSQL_DATABASE, MYSQL_PORT);

        /*
        * $mysql->connect_error para pegar a descrição do erro que ocorreu durante a conexão
        * com o banco de dados, aqui verifico se essa propriedade é vazia, se ela for
        * é sinal de que a conexão foi um sucesso, caso contrário ocorreu um erro
        */
        if(!empty($mysql->connect_error)) $errorDesc = $mysql->connect_error;
    } catch(Exception $exception) {
        $errorDesc = $exception->getMessage();
    }

    if(!empty($errorDesc)) {
        abortByDatabaseConnectionFail($errorDesc);
    }

    return $mysql;
}

function abortByDatabaseConnectionFail(string $errorDesc) 
{
    $message = sprintf(
        'Database connection fail! %s',
        PRODUCTION_ENV ?
        '' : 
        $errorDesc
    );
    
    die($message);
}