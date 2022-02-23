<?php
class dbconnection{
    private static $pdo;
    public static function make()
    {
        try{

            self::$pdo = self::$pdo ? 
            :new PDO('mysql:host=localhost;dbname=tasks','root','');
            return self::$pdo;
        }catch(PDOException $e){//قم بأستدعاء كائن الخطأ للحصول علي رسالة الخطأ
            die($e->getMessage());
        }
    }
}

