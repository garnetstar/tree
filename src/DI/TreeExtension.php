<?php

/**
 * Created by PhpStorm.
 * User: jan
 * Date: 25.9.14
 * Time: 11:03
 */
class TreeExtension extends \Nette\DI\CompilerExtension
{
	public static function register(Nette\Configurator $configurator)
	{
		$configurator->onCompile[] = function ($config, Compiler $compiler)
		{
			$compiler->addExtension('tree', new TreeExtension());
		};
	}

} 