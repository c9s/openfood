<?php
namespace OpenFood\Model;
use LazyRecord\ModelTrait\RevisionModelTrait;
use LazyRecord\BaseModel;
class FoodBase
    extends BaseModel
{
    use RevisionModelTrait;
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
      4 => 'revision_parent_id',
      5 => 'revision_root_id',
      6 => 'revision_updated_at',
      7 => 'revision_created_at',
      8 => 'id',
    );
    public static $column_hash = array (
      'name' => 1,
      'company_id' => 1,
      'updated_at' => 1,
      'created_at' => 1,
      'revision_parent_id' => 1,
      'revision_root_id' => 1,
      'revision_updated_at' => 1,
      'revision_created_at' => 1,
      'id' => 1,
    );
    public static $mixin_classes = array (
      0 => 'LazyRecord\\Schema\\Mixin\\RevisionMixinSchema',
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
    public function getRevisionParentId()
    {
        if (isset($this->_data['revision_parent_id'])) {
            return $this->_data['revision_parent_id'];
        }
    }
    public function getRevisionRootId()
    {
        if (isset($this->_data['revision_root_id'])) {
            return $this->_data['revision_root_id'];
        }
    }
    public function getRevisionUpdatedAt()
    {
        if (isset($this->_data['revision_updated_at'])) {
            return $this->_data['revision_updated_at'];
        }
    }
    public function getRevisionCreatedAt()
    {
        if (isset($this->_data['revision_created_at'])) {
            return $this->_data['revision_created_at'];
        }
    }
    public function getId()
    {
        if (isset($this->_data['id'])) {
            return $this->_data['id'];
        }
    }
}
