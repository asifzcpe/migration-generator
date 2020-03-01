<?php

namespace Asif\MigrationGenerator;
use Illuminate\Support\ServiceProvider;
use Asif\MigrationGenerator\MigrationGeneratorCommand;
class MigrationGeneratorServiceProvider extends ServiceProvider
{
	public function boot()
	{
		if($this->app->runningInConsole())
		{
			$this->commands([
				MigrationGeneratorCommand::class,
			]);
		}
	}

	public function register()
	{

	}
}