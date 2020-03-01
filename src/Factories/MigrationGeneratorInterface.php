<?php
namespace Asif\MigrationGenerator\Factories;
interface MigrationGeneratorInterface
{
    public function makeCommand(string $columnName,bool $isNullable=false, string $modificationType);
}