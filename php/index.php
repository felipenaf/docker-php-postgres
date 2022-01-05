<?php

$consulta = sprintf(
    "host=%s port=%s dbname=%s user=%s password=%s",
    "postgres",
    5432,
    "test",
    "postgres",
    "postgres"
);

$conn = pg_connect($consulta);

if ($conn) {
    pg_set_client_encoding($conn, 'UTF8');

    print "<h1>Connection Succeed</h1>";
} else {
    print "<h1>Connection Fail</h1>";
}
