<?php

namespace App;

use App\Exceptions\DbException;

class Db
{
    use TSingleton;

    protected $dbh;

    /**
     * Db constructor.
     */
    protected function __construct()
    {
        $config = Config::getInstance()->data['db'];
        try {
            $this->dbh = new \PDO('mysql:host=' . $config['host'] .
                ';dbname=' . $config['dbname'],
                $config['user'],
                $config['password']);
        }catch (\PDOException $e) {
            throw new DbException($e->getMessage());
        }

    }

    /**
     * @param string $sql
     * @param array $data
     * @param null $class
     * @return array,obj
     */
    public function query(string $sql, array $data = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);
        if (false === $result) {
            throw new DbException('Ошибка запроса к БД');
            die;
        }
        if (null === $class) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

}