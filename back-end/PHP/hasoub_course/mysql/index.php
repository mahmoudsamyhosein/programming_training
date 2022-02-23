<?php
/** أنظمة أدارة قواعد البيانات dbms
 *  Non Realational DBMS قواعد البيانات اللاعلائقية
 *  Realational DBMS قواعد البيانات العلائقية
 * [ PostgreSql - sql server - Oracle - MySql ]
 *  INSERT INTO 'tasks' ('','') VALUES ('',''); لادخال بيانات بالجدول 
 *  SELECT * FROM 'tasks' WHERE id=1 ; لاختيار من الجدول
 * UPDATE 'tasks' SET 'completed' = 1 WHERE * 'completed' = 0 ; لتحديث بيانات الأستعلام
 */
#الاتصال مع قواعد البيانات عبر PDO=php data object
//حاول الاتصال بقاعدة البيانات والا  

require '_init.php';

querybuilder::insert();

$tasks = querybuilder::get('tasks');



foreach ($tasks as $task){
    echo "{$task->description} <br />";
}












// echo "<pre>";
// var_dump($query);
// echo "</pre>";








 