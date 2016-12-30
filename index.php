<!DOCTYPE html>
<!--
[27.12.2016 17:48:15] Ivan Fedotov: В данном случае, можно сначала написать простой контроллер с основными методами 
и разместить разметку во вьюв. Далее, добавить модель и организовать ввод\вывод данных.
[27.12.2016 17:49:00] Ivan Fedotov: Сам вопрос, более корректно обсуждать по коду.
[27.12.2016 17:49:37] Mikhail Ostroverkhiy: я не совсем понимаю какие методы нужны
[27.12.2016 17:49:49] Mikhail Ostroverkhiy: только на прием и передачу данных?
[27.12.2016 17:54:14] Ivan Fedotov: Вероятно, с некой welcome-страницей, так понимаю тестом\формой для кандидата - tests и, 
наконец, success.
[27.12.2016 17:54:37] Ivan Fedotov: Точнее смогу сказать по макету.
[27.12.2016 17:55:15] Ivan Fedotov: Ок.
[27.12.2016 17:55:29] Ivan Fedotov: Это форма.
[27.12.2016 17:55:49] Mikhail Ostroverkhiy: понял
[27.12.2016 17:56:37] Ivan Fedotov: Формально, можно обойтись 2 методами в контроллере.
[27.12.2016 17:57:01] Ivan Fedotov: (без welcome)
[27.12.2016 17:57:46] Ivan Fedotov: Вьюв - 1. Собственно, с кодом формы.
[27.12.2016 17:58:09] Mikhail Ostroverkhiy: Спасибо большое!
[27.12.2016 17:58:30 | Изменены 17:58:23] Ivan Fedotov: Оповещение во втором методе можно выводить просто текстом (без вьюв)
[27.12.2016 17:58:48] Mikhail Ostroverkhiy: тоже понял
[27.12.2016 17:59:11] Ivan Fedotov: Модель также одна к единственной таблиц, скажем, candidates.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        mkdir($includes);
        mkdir ($classes);
        error_reporting (E_ALL);
        if (version_compare(phpversion(), '5.1.0', '<') == true) { die ('PHP5.1 Only'); }
// Константы:
        define ('DIRSEP', DIRECTORY_SEPARATOR);
// Узнаём путь до файлов сайта
        $site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP;
        define ('site_path', $site_path);
        ?>
    </body>
</html>
