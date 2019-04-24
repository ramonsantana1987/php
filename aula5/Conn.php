<?php


namespace Aula5;




class Conn
{
    /** @var string */
    public static $host = "localhost";
    /** @var string */
    public static $name = "root";
    /** @var string */
    public static $pass = "1234";
    /** @var string */
    public static $db = "mercado";
    /** @var \PDO */
    private static $conn = null;

    private static function conectar(): \PDO
    {
        try {
            if (self::$conn == null)
                self::$conn = new \PDO('mysql:host=' . self::$host . ';dbname=' . self::$db, self::$name, self::$pass);

        } catch (Exception $ex) {
            echo("Erro: " . $ex->getMessage());
            die;
        }
        return self::$conn;
    }

    public function abrirConexao()
    {
        return self::conectar();
    }

}
