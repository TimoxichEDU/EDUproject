<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор объема куба</title>
</head>
<body>
<h1>Калькулятор объема куба</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Если форма отправлена, обрабатываем данные
    $side = floatval($_POST["side"]);

    if ($side > 0) {
        // Вычисляем объем куба
        $volume = $side * $side * $side;
        echo "Объем куба с стороной $side см равен $volume кубическим сантиметрам.";
    } else {
        echo "Пожалуйста, введите положительное число для стороны куба.";
    }
} else {
    // Отображаем форму для ввода стороны куба
    echo '
        <form method="post">
            Введите сторону куба (в сантиметрах): <input type="text" name="side" required><br>
            <input type="submit" value="Рассчитать">
        </form>';
}
?>
</body>
</html>
