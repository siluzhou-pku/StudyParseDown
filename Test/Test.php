<?php
/**
 * Created by PhpStorm.
 * User: Zhousilu
 * Date: 2016/8/30
 * Time: 18:15
 */

require "../vendor/autoload.php";

$Parsedown = new Parsedown();

echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>

echo $Parsedown->text('**important!**');