<?php

namespace App\Traits;

trait Backup
{

    public static function generar(){

        // Variables para la conexion a la base de datos, mysqldump
        dd([
            'DB_HOST' => env('DB_HOST', 'localhost'),
            'DB_DATABASE' => env('DB_DATABASE', 'serviego'),
            'DB_USERNAME' => env('DB_USERNAME', 'root'),
            'DB_PASSWORD' => env('DB_PASSWORD', ''),
        ]);

        // Para identificar nuestro respaldo
        $fecha = date('Ymd-His');

        // Ruta donde quedara almacenada
        $path = '../database/backups/';

        // Como se guarda nuestro respaldo
        $salida_sql = $path . $db_name . '_' . $fecha . '.sql';

        // Instrucciones
        $dump = "mysqldump -h $db_host -u $db_user --password=$db_password --opt $db_name > $salida_sql";

        // Ejecutamos nuestra instruccion
        system($dump, $output);

        return $output;

    }

}
