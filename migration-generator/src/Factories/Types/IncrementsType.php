<?php
namespace Asif\MigrationGenerator\Factories\Types;
use  Asif\MigrationGenerator\Factories\MigrationGeneratorInterface;
class IncrementsType implements MigrationGeneratorInterface
{
   public function makeCommand(string $columnName,bool $isNullable=false, string $modificationType='new')
   {
       $generatedCommand= '$table->increments("'.$columnName.'")';
       return $generatedCommand.";";
   }
}