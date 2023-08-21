<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

include('inc/form.php');

include('inc/header.php');
/**
 * 字体库
 *
 * @package FontLibs
 * @author  小小孩子们
 * @version 1.0.3
 * @link https://www.xxhzm.cn/archives/724/
 */
class FontLibs_Plugin implements Typecho_Plugin_Interface
{
  public static function activate()
  {
    Typecho_Plugin::factory('Widget_Archive')->header = array(__CLASS__, 'header');

    return '插件已被启用';
  }

  public static function deactivate()
  {
    return '插件已经被禁用';
  }

  public static function config(Typecho_Widget_Helper_Form $form)
  {
    // 字体设置
    $form->addInput(FontLibs_Form::SetFont());

    // 设置字体加载地址
    $form->addInput(FontLibs_Form::SetCdn());

    // 自定义字体加载
    $form->addInput(FontLibs_Form::Customize());
  }

  public static function personalConfig(Typecho_Widget_Helper_Form $form)
  {
  }

  public static function render()
  {
  }

  public static function header()
  {
    FontLibs_Head::SetFont();
  }
}
