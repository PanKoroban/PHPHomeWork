<?php
// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
require_once 'server.php';

Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
    
    // инициализируем Twig
    $twig = new Twig_Environment($loader);
    
    // подгружаем шаблон
    $template = $twig->loadTemplate('main.tmpl');
    
    // передаём в шаблон переменные и значения
    // выводим сформированное содержание
    
    $content = $template->render(array(
      'array' => $a
    ));
    echo $content;
    
  } catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
  }