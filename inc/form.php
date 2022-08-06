<?php

class FontLibs_Form
{
  // 设置字体
  static function SetFont()
  {
    $list = [
      '0' => '关闭',
      '1' => 'HarmonySanc鸿蒙字体',
      '2' => '方正像素',
      '3' => '方正兰亭细黑',
      '4' => '方正北魏楷书简体',
      '5' => '方正细俊黑简体',
      '6' => '汉仪中楷简',
      '7' => '汉仪劲楷简',
      '8' => '汉仪粗仿宋简',
      '9' => '造字工房典黑超细体',
      '10' => '造字工房尚黑常规体',
      '11' => '造字工房悦圆',
      '12' => '潮玩嬉戏体',
      '13' => '快乐灵影体'
    ];

    $result = new Typecho_Widget_Helper_Form_Element_Radio('SetFont', $list, '0', _t('字体设置'), _t('前台字体样式'));

    return $result;
  }

  // 设置字体加载地址
  static function SetCdn()
  {
    $result = new Typecho_Widget_Helper_Form_Element_Text('SetCdn', NULL, 'https://cdn.xxhzm.cn/FontLIbs/', _t('字体加载地址'), _t('默认从cdn.xxhzm.cn加载字体，如需自定义请去https://www.xxhzm.cn/archives/724/下载字体包<br>本项对HarmonySanc无效'));

    return $result;
  }

  static function Customize()
  {
    $result = new Typecho_Widget_Helper_Form_Element_Text('Customize', NULL, '', _t('自定义加载字体'), _t('请输入字体URL'));

    return $result;
  }
}
