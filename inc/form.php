<?php

class FontLibs_Form
{
  // 设置字体
  static function SetFont()
  {
    $list = [
      '0' => '关闭',
      '1' => 'HarmonySanc鸿蒙字体',
      '2' => '方正像素.TTF',
      '3' => '方正兰亭细黑.TTF',
      '4' => '方正北魏楷书简体.ttf',
      '5' => '方正细俊黑简体.TTF',
      '6' => '汉仪中楷简.ttf',
      '7' => '汉仪劲楷简.ttf',
      '8' => '汉仪粗仿宋简.ttf',
    ];

    $result = new Typecho_Widget_Helper_Form_Element_Radio('SetFont', $list, '0', _t('字体设置'), _t('前台字体样式'));

    return $result;
  }

  // 设置字体
  static function SetCdn()
  {
    $result = new Typecho_Widget_Helper_Form_Element_Text('SetCdn', NULL, 'https://cdn.xxhzm.cn/FontLIbs/', _t('字体加载地址'), _t('默认从cdn.xxhzm.cn加载字体，如需自定义请去https://www.xxhzm.cn/archives/724/下载字体包<br>本项对HarmonySanc无效'));

    return $result;
  }
}
