<?php


class querybuilder {

    private static function make(PDO $pdo){
        self::$pdo = $pdo;
    }



    public static function get(string $table){

        $query = self::$pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);


    }

    public static function insert(){
        $data = [
                    'description' => 'NEW Task 2',
                    'NEW TASK',0 
                ];
        $fields = array_keys($data);
        $fieldsStr = implode(',',$fields);
        $valueStr  = str_repeat('?', count($fields) -1) . '?';
        var_dump($query);
        exit;
        $query = "INSERT INTO tasks(description,completed) VALUES(:description,:completed)";
        $statment = self::$pdo->prepare($query);
        $statment->execute($data);
    }
}