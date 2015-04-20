<?php
namespace OpenFood\Model;
use LazyRecord\BaseModel;
class FoodIngredientBase
    extends BaseModel
{
    const schema_proxy_class = 'OpenFood\\Model\\FoodIngredientSchemaProxy';
    const collection_class = 'OpenFood\\Model\\FoodIngredientCollection';
    const model_class = 'OpenFood\\Model\\FoodIngredient';
    const table = 'food_ingredients';
    const read_source_id = 'default';
    const write_source_id = 'default';
    const primary_key = 'id';
    public static $column_names = array (
      0 => 'food_id',
      1 => 'ingredient',
      2 => 'id',
    );
    public static $column_hash = array (
      'food_id' => 1,
      'ingredient' => 1,
      'id' => 1,
    );
    public static $mixin_classes = array (
    );
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = \LazyRecord\Schema\SchemaLoader::load('OpenFood\\Model\\FoodIngredientSchemaProxy');
    }
    public function getFoodId()
    {
        if (isset($this->_data['food_id'])) {
            return $this->_data['food_id'];
        }
    }
    public function getIngredient()
    {
        if (isset($this->_data['ingredient'])) {
            return $this->_data['ingredient'];
        }
    }
    public function getId()
    {
        if (isset($this->_data['id'])) {
            return $this->_data['id'];
        }
    }
}
