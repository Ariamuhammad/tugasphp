<?php
    require "Db.php";
    function get($query){
        global $connection;
        $result = mysqli_query($connection, $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    function save($query){
        global $connection;
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }

    function delete($query){
        global $connection;
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }