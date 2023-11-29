<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Список зарегистрированных пользователей
    $registeredUsers = array(
        "Ivan" => "Иванов Иван Иванович",
        "Maria" => "Иванова Мария Петровна",
        "Alex" => "Алексеев Александр Александрович",
        "Elena" => "Тестова Елена Андреевна",
        "shidani0" => "Шагидулин Дмитрий"
    );

    // Получение введенного логина из формы
    $inputUsername = $_POST["username"];

    // Проверка, зарегистрирован ли пользователь с таким логином
    if (array_key_exists($inputUsername, $registeredUsers)) {
        $welcomeMessage = "Здравствуйте, " . $registeredUsers[$inputUsername] . "!";
        echo $welcomeMessage;
    } else {
        echo "Вы не зарегистрированный пользователь!";
    }
}
?>
