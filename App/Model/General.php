<?php

namespace App\Model;

use App\Db;
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

    /**
     * Lazy load
     * @param $name
     * @return bool|null
     */
    public function __get($name)
    {
        switch($name) {
            case 'genpl':
                return  General::findByid($this->id +1);
                break;
            case 'genmin':
                return  General::findByid($this->id -1);
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
            case 'genmin':
                return true;
                break;
            default:
                return null;
        }
    }

}

