<?php
        $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017"); //conexão padrão local

        $query = new \MongoDB\Driver\Query([]);  //todos os itens da listagem "find all"

        $cursor = $manager->executeQuery('raiz.academicos' , $query );

        foreach ($cursor as $c ) {
            echo $c->nome."<br>";
            echo $c->idade;
        }