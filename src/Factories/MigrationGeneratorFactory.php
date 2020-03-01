<?php
namespace Asif\MigrationGenerator\Factories;
use Asif\MigrationGenerator\Factories\MigrationGeneratorInterface;
class MigrationGeneratorFactory
{
    public static function generate(MigrationGeneratorInterface $columnType,string $columnName,bool $isNullable=false, string $modificationType='new')
    {
         return $columnType->makeCommand($columnName,$isNullable,$modificationType);
    }
}