<?php
namespace OpenFood\Model;
use LazyRecord\BaseModel;
class IngredientBase
    extends BaseModel
{
    const schema_proxy_class = 'OpenFood\\Model\\IngredientSchemaProxy';
    const collection_class = 'OpenFood\\Model\\IngredientCollection';
    const model_class = 'OpenFood\\Model\\Ingredient';
    const table = 'ingredients';
    const read_source_id = 'default';
    const write_source_id = 'default';
    const primary_key = 'id';
    public static $column_names = array (
      0 => 'name',
      1 => 'id',
    );
    public static $column_hash = array (
      'name' => 1,
      'id' => 1,
    );
    public static $mixin_classes = array (
    );
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = \LazyRecord\Schema\SchemaLoader::load('OpenFood\\Model\\IngredientSchemaProxy');
    }
    public function getName()
    {
        if (isset($this->_data['name'])) {
            return $this->_data['name'];
        }
    }
    public function getId()
    {
        if (isset($this->_data['id'])) {
            return $this->_data['id'];
        }
    }
}
