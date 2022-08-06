<?php
class FontLibs_Head
{
  // 设置字体
  static function SetFont()
  {
    // 插件所在位置的路径信息
    $PluginPath = Helper::options()->pluginUrl . '/FontLibs/static/';

    // 判断是否开启了自定义字体
    $Customize = Typecho_Widget::widget('Widget_Options')->plugin('FontLibs')->Customize;

    if ($Customize !== '') {
      echo "<script src='$PluginPath/css/css.php?Customize=$Customize'></script>";
      return false;
    }

    $path = Typecho_Widget::widget('Widget_Options')->plugin('FontLibs')->SetCdn;
    // 获取配置信息
    $type = Typecho_Widget::widget('Widget_Options')->plugin('FontLibs')->SetFont;

    if ($type === '1') {
      echo "<link rel='stylesheet' href='$PluginPath/css/HarmonySanc.css' />";
    } else if ($type !== '0' && $type !== '1') {
      echo "<script src='$PluginPath/css/css.php?type=$type&path=$path'></script>";
    }
  }
}
