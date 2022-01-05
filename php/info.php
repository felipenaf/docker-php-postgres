<?php

$consulta = sprintf(
    "host=%s port=%s dbname=%s user=%s password=%s",
    "postgres",
    5432,
    "VAM",
    "postgres",
    "postgres"
);

$conn = pg_connect($consulta);

if ($conn) {
    pg_set_client_encoding($conn, 'UTF8');

    $stmt = pg_query_params($conn, 'select * from city', []);
    $result = pg_fetch_all($stmt);
    
    var_dump($result);
}

// phpinfo();