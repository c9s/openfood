<?php
namespace OpenFood\Model;
use LazyRecord\Schema\SchemaDeclare;

class IngredientSchema extends SchemaDeclare
{
    public function schema() {
        $this->column('name')->varchar(30);
        $this->many('foods', 'OpenFood\\Model\\FoodSchema', 'ingredient_id', 'id');
    }
}
