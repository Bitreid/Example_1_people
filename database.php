<?php

/**
* Автор: Бобер Алексей
* Дата реализации: 17.05.2022 13:00
*
* Дата изменения: 18.05.2022 12:50
*
* Утилита для работы с базой данных
*/


class Database
{
    // указываем параметры подключения к базе данных
    private $host = "localhost";
    private $db_name = "test";
    private $username = "root";
    private $password = "";
    public $conn;

    // получение соединения с базой данных
    public function getConnection()
    {
      $this->conn = null;

      try {
          $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      } catch(PDOException $exception) {
          echo "Ошибка соединения: " . $exception->getMessage();
          // throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
      return $this->conn;
    }
}
