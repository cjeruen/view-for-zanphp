<?php namespace Com\JeRuen\Zan\View;
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 上午11:44
 */
interface IView
{
    public static function display($tplPath, array $data = []);
}
