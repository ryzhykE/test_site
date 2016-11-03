<?php

namespace App\Model;

use App\Model;

class General
    extends Model
{
    public static $table = 'generals';
    public $id;
    public $name;
    public $surname;
    public $pfoto;
    public $date;
    public $biography;
    public $rang_id;

    /**
     * Lazy load
     * @param $name
     * @return bool|null
     */
    public function __get($name)
    {
        switch($name) {
            case 'genpl':
                return  Rang::findByid($this->rang_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch($name) {
            case 'genpl':
                return true;
                break;
            default:
                return null;
        }
    }

}

