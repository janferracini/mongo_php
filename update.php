<?php
        $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017"); //conexão padrão local

    $up = new \MongoDB\Driver\BulkWrite;

    //$up->update(['nome' => 'Afronesio'], ['nome' => 'Afronesio', 'idade' => 45]); //altera todos os itens
    $up->update(['nome' => 'Afronesio'], ['$set' => ['nome' => 'Afronesio dos Santos']]); //seta apenas o nome

    $manager->executeBulkWrite('raiz.academicos' , $up);