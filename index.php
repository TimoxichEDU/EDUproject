<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор объема куба</title>
</head>
<body>
<h1>Калькулятор объема куба</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Если пользователь нажал на кнопку, то обрабатываем пост запрос
    $side = floatval($_POST["side"]);

    if ($side > 0) {
        // Вычисляем объем куба и выводим ответ
        $volume = $side * $side * $side;
        echo "Объем куба с стороной $side см равен $volume кубическим сантиметрам.";
    } else {
        echo "Пожалуйста, введите положительное число для стороны куба.";
    }
} else {
    // Задаем две переменные для расчета
    // Отображаем форму для ввода стороны куба
    echo '
        <form method="post">
            Введите сторону куба: <input type="text" name="side" required><br>
            <input type="submit" value="Рассчитать">
        </form>';
}
?>
</body>
</html>
