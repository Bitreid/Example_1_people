<?php
// проверим, было ли получено значение в $_POST
if ($_POST) {
  // подключим файлы, необходимые для подключения к базе данных и файл класса
  require 'database.php';
  require 'test_class.php';

  // получаем соединение с базой данных
  $database = new Database();
  $db = $database->getConnection();

  // создаем экземпляр класса output_people
  $output_people = new People($db);

  // устанавливаем ID записи для удаления
  $output_people->id = $_POST['object_id'];

  // удаляем запись из БД
  if ($output_people->delete()) {
      echo "Запись была удалёна.";
  }

  // если невозможно удалить запись из БД
  else {
      echo "Невозможно удалить запись.";
  }
}
