<?php

namespace App;

use App\Exceptions\MultiException;

abstract class Model
{
    public static $table;
    public $id;

    /**
     * @return array
     */
    public static function findAll()
    {
        $db = DB::getInstance();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

    /**
     * @param $id
     * @return bool
     */
    public static function findByid($id)
    {
        $db = DB::getInstance();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE id=:id',
            [':id' => $id],
            static::class
        );
        return $data[0] ?? false;
    }

}