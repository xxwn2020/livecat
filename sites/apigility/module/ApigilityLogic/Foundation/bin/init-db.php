<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2016/11/18
 * Time: 16:51
 */
use Zend\Crypt\Password\Bcrypt;

set_time_limit(0);
ini_set('memory_limit', '-1');

$entityManager = include 'doctrine-entity-manager.php';

echo 'init data ...'.PHP_EOL;

// 初始化需要的服务
$sm = $application->getServiceManager();


$entityManager->flush();


echo 'Done!'.PHP_EOL;


