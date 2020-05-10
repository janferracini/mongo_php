<?php   
    $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017"); //conexão padrão local

    $db = new \MongoDB\Driver\BulkWrite; 
    
    $db->insert(['nome'=>'Maria', 'idade'=>25]);

    $manager->executeBulkWrite('raiz.academicos', $db);
