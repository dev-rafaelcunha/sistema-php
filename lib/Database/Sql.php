<?php

class Sql extends \PDO
{
    private static object $stmt;

    private static function connect(): object
    {
        try {

            $conn = new \PDO(
                self::configurationDataBaseParams(),
                'root',
                ''
            );

            $conn->exec("set names utf8");

            return $conn;
        } catch (\PDOException $error) {

            echo $error->getMessage();
        }
    }

    private static function configurationDataBaseParams(): string
    {
        $dataBaseParams = [

            'host' => 'localhost',
            'dbname' => 'sistema-php',
            'port' => '3306',
            'username' => 'root',
            'password' => ''
        ];

        $dataBase = 'mysql:host=' . $dataBaseParams['host'];
        $dataBase .= ';port=' . $dataBaseParams['port'];
        $dataBase .= ';dbname=' . $dataBaseParams['dbname'];

        return $dataBase;
    }

    private static function setParam($key, $value)
    {
        self::$stmt->bindParam($key, $value);
    }

    private static function setParams($params = [])
    {
        foreach ($params as $key => $value) {

            self::setParam($key, $value);
        }
    }

    public static function allQuery(string $rawQuery, array $params = [])
    {
        try {

            self::$stmt = self::connect()->prepare($rawQuery);

            self::setParams($params);

            $res = self::$stmt->execute();

        } catch (\Exception $error) {

            echo $error->getMessage();
        }

        return $res;
    }

    public static function selectQuery($rawQuery, $params = [])
    {
        self::allQuery($rawQuery, $params);

        return self::$stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
