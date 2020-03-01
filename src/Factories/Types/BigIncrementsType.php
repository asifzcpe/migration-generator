<?php
namespace Asif\MigrationGenerator\Factories\Types;
use  Asif\MigrationGenerator\Factories\MigrationGeneratorInterface;
class BigIncrementsType implements MigrationGeneratorInterface
{
   public function makeCommand(string $columnName,bool $isNullable=false, string $modificationType='new')
   {
       $generatedCommand= '$table->bigIncrements("'.$columnName.'")';
       ($modificationType=='change')?$generatedCommand.="->change()":'';
       return $generatedCommand.";";
   }
}