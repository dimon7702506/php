<?php

/*//case1 - absolute path
require_once "subnamespace.php";

$user = new \Application\Model\User\UserModel();
$user->setName('Ivan');
$user->getName();
echo $user->getName();*/

/*//case2 - relative path
namespace Application;
require_once "subnamespace.php";
$user = new namespace\Model\User\UserModel();
var_dump($user);*/

/*//case3 - partial path
namespace Application\Model;
require_once "subnamespace.php";
$user = new User\UserModel();
var_dump($user);*/

//case4 - import namespace
namespace Run;
require_once "subnamespace.php";
use Application\Model\User;
$userModel = new User\UserModel();
var_dump($userModel);