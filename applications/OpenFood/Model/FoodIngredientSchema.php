<?php
namespace OpenFood\Model;
use LazyRecord\Schema\SchemaDeclare;

class FoodIngredientSchema extends SchemaDeclare
{
    public function schema() {
        $this->column('food_id')->integer()->unsigned()->required();
        $this->column('ingredient')->integer()->unsigned()->required();

        $this->belongsTo('food', 'OpenFood\\Model\\FoodSchema', 'id', 'food_id');
        $this->belongsTo('ingredient', 'OpenFood\\Model\\IngredientSchema', 'id', 'ingredient_id');
    }
}
