<?php

function controller_autoload($classNames)
{
  include 'controllers/'.$classNames.'.php';
}

spl_autoload_register('controller_autoload');