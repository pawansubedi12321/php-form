<?php
class Databaseconnection{
    function getConnection()
    {
        $serverName="localhost";
        $userName="root";
        $password="";
        $databaseName="form";

        return mysqli_connect($serverName,$userName,$password,$databaseName);
    }
}