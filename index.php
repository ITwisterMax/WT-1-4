<link rel="stylesheet" href="style.css">

<?
// Получение исходного текста
$text = file_get_contents("test.txt");
echo "<div class=\"text\">Исходный текст: <br /><pre>" . $text . "</pre><br /><br />";

// Регулярное выражение для определения e-mail
$pattern = "/([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}/";
// Замена e-mail на mailto:e-mail
$result = preg_replace($pattern, "<a class=\"email\" href=\"mailto:$0\">$0</a>", $text);

echo "Измененный текст: <br /><pre>" . $result . "</pre></div>";
