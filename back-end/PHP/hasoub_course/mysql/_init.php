<?php
require 'database/Db_Connection.php';
require 'database/query.php';


querybuilder::make(
    dbconnection::make()
);
