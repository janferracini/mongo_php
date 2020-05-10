<?php
        $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017"); //conexão padrão local

        $bw = new \MongoDB\Driver\BulkWrite;

        $filter=['nome'=>'Maria'];

        $bw->delete($filter);

        $manager->executeBulkWrite('raiz.academicos', $bw);