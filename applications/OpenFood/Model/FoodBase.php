<?php
namespace OpenFood\Model;
use LazyRecord\BaseModel;
class FoodBase
    extends BaseModel
{
    const schema_proxy_class = 'OpenFood\\Model\\FoodSchemaProxy';
    const collection_class = 'OpenFood\\Model\\FoodCollection';
    const model_class = 'OpenFood\\Model\\Food';
    const table = 'foods';
    const read_source_id = 'default';
    const write_source_id = 'default';
    const primary_key = 'id';
    public static $column_names = array (
      0 => 'name',
      1 => 'company_id',
      2 => 'updated_at',
      3 => 'created_at',
      4 => 'id',
    );
    public static $column_hash = array (
      'name' => 1,
      'company_id' => 1,
      'updated_at' => 1,
      'created_at' => 1,
      'id' => 1,
    );
    public static $mixin_classes = array (
    );
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = \LazyRecord\Schema\SchemaLoader::load('OpenFood\\Model\\FoodSchemaProxy');
    }
    public function getName()
    {
        if (isset($this->_data['name'])) {
            return $this->_data['name'];
        }
    }
    public function getCompanyId()
    {
        if (isset($this->_data['company_id'])) {
            return $this->_data['company_id'];
        }
    }
    public function getUpdatedAt()
    {
        if (isset($this->_data['updated_at'])) {
            return $this->_data['updated_at'];
        }
    }
    public function getCreatedAt()
    {
        if (isset($this->_data['created_at'])) {
            return $this->_data['created_at'];
        }
    }
    public function getId()
    {
        if (isset($this->_data['id'])) {
            return $this->_data['id'];
        }
    }
}
