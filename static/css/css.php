<?php
// 文件加载路径
$path = $_GET['path'];
$fileName = '';

switch ($_GET['type']) {
  case '2':
    $fileName = '方正像素';
    break;

  case '3':
    $fileName = '方正兰亭细黑';
    break;

  case '4':
    $fileName = '方正北魏楷书简体';
    break;

  case '5':
    $fileName = '方正细俊黑简体';
    break;

  case '6':
    $fileName = '汉仪中楷简';
    break;

  case '7':
    $fileName = '汉仪劲楷简';
    break;

  case '8':
    $fileName = '汉仪粗仿宋简';
    break;

  default:
    echo "document.write(\"FontLibs插件错误\")";
    exit;
}
// 输出css
$style = "<style> @font-face {font-family: 'font_css';font-style: normal;font-weight: 400;font-display: swap;src: url('$path/$fileName.ttf');}* {font-family: 'font_css' !important;}</style>";
echo "document.write(\"$style\")";
