<?php
namespace Asif\MigrationGenerator\Factories\Types;
use  Asif\MigrationGenerator\Factories\MigrationGeneratorInterface;
class DateTimeType implements MigrationGeneratorInterface
{
   public function makeCommand(string $columnName,bool $isNullable=false, string $modificationType='new')
   {
       $generatedCommand= '$table->dateTime("'.$columnName.'")';
       ($isNullable)?$generatedCommand.="->nullable()":'';
       ($modificationType=='change')?$generatedCommand.="->change()":'';
       
       return $generatedCommand.";";
   }
}