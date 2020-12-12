<?php
        /* class Sach{
            public $masach,$tensach;
        } */
        try
        
        {
            $pdo=new PDO("mysql:host=localhost;dbname=game", "root", "");
            $pdo->query("set names utf8");
            $sql_game ="select * from game";
            $stm_game= $pdo->query($sql_game);
            $data_game = $stm_game->fetchAll(PDO::FETCH_ASSOC);
            $sql_loai= "select * from loai";
            $stm_loai = $pdo->query($sql_loai);
            $data_loai = $stm_loai-> fetchAll(PDO::FETCH_ASSOC);
        
            //echo "kết nối thành công";
            

            
        } catch(PDOException $e)
        { 
            echo "Co loi ket noi DB";
            //echo $e->getMessage(); 
        }
        
    ?>