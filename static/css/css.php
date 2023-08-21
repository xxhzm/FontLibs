<?php

// 文件加载路径
$fileName = '';

// 判断是否开启了自定义字体
$Customize = $_GET['Customize'] ?? '';

if ($Customize !== '') {
  $fileName = $Customize;
} else if ($_GET['type'] !== '0') {
  $fileName = $_GET['path'] . $_GET['type'] . ".ttf";
}

// 输出css
$style = "<style> @font-face {font-family: 'font_css';font-style: normal;font-weight: 400;font-display: swap;src: url('$fileName');}body {font-family: 'font_css' !important;}</style>";
echo "document.write(\"$style\")";
