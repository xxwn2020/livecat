<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/1
 * Time: 14:43:10
 */
namespace ApigilityLogic\Foundation\Doctrine\Query\CreateFilter;

abstract class AbstractCreateFilter extends \ZF\Apigility\Doctrine\Server\Query\CreateFilter\AbstractCreateFilter
{
    protected function setCreateTime($data) {
        if (!isset($data->create_time)) $data->create_time = time();
        return $data;
    }

    protected function setUpdateTime($data) {
        if (!isset($data->update_time)) $data->update_time = time();
        return $data;
    }
}