<?php

    if(!empty($_GET['id']))
    {
        include_once('conect_adm.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM loging WHERE id=$id";

        $result = $conex->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM loging WHERE id=$id";
            $resultDelete = $conex->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>