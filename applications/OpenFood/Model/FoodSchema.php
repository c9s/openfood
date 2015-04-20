<?php
namespace OpenFood\Model;
use LazyRecord\Schema\SchemaDeclare;

class FoodSchema extends SchemaDeclare
{
    public function schema() {

        $this->column('name')->varchar(60);

        $this->column('company_id')->integer()->unsigned();

        $this->column('updated_at')->datetime();

        $this->column('created_at')->datetime();

        $this->belongsTo('company', 'OpenFood\\Model\\CompanySchema', 'id', 'company_id');

        $this->many('ingredients', 'OpenFood\\Model\\IngredientSchema', 'food_id', 'id');
    }
}
