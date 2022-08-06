<?php

// 文件加载路径
$fileName = '';

// 判断是否开启了自定义字体
$Customize = $_GET['Customize'] ?? '';

if ($Customize !== '') {
  $fileName = $Customize;
} else {
  switch ($_GET['type']) {
    case '2':
      $fileName = $_GET['path'] . '/方正像素.ttf';
      break;

    case '3':
      $fileName = $_GET['path'] . '/方正兰亭细黑.ttf';
      break;

    case '4':
      $fileName = $_GET['path'] . '/方正北魏楷书简体.ttf';
      break;

    case '5':
      $fileName = $_GET['path'] . '/方正细俊黑简体.ttf';
      break;

    case '6':
      $fileName = $_GET['path'] . '/汉仪中楷简.ttf';
      break;

    case '7':
      $fileName = $_GET['path'] . '/汉仪劲楷简.ttf';
      break;

    case '8':
      $fileName = $_GET['path'] . '/汉仪粗仿宋简.ttf';
      break;

    case '9':
      $fileName = $_GET['path'] . '/造字工房典黑超细体.ttf';
      break;

    case '10':
      $fileName = $_GET['path'] . '/造字工房尚黑常规体.ttf';
      break;

    case '11':
      $fileName = $_GET['path'] . '/造字工房悦圆.otf';
      break;

    case '12':
      $fileName = $_GET['path'] . '/潮玩嬉戏体.ttf';
      break;

    case '13':
      $fileName = $_GET['path'] . '/快乐灵影体.ttf';
      break;

    default:
      echo "document.write(\"FontLibs插件错误\")";
      exit;
  }
}

// 输出css
$style = "<style> @font-face {font-family: 'font_css';font-style: normal;font-weight: 400;font-display: swap;src: url('$fileName');}* {font-family: 'font_css' !important;}</style>";
echo "document.write(\"$style\")";
