<?php
namespace OpenFood\Model;
use LazyRecord\Schema\SchemaDeclare;

class IngredientSchema extends SchemaDeclare
{
    public function schema() {

        $this->column('name')->varchar(30);


    }
}
