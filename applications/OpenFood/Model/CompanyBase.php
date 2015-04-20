<?php
namespace OpenFood\Model;
use LazyRecord\BaseModel;
class CompanyBase
    extends BaseModel
{
    const schema_proxy_class = 'OpenFood\\Model\\CompanySchemaProxy';
    const collection_class = 'OpenFood\\Model\\CompanyCollection';
    const model_class = 'OpenFood\\Model\\Company';
    const table = 'companies';
    const read_source_id = 'default';
    const write_source_id = 'default';
    const primary_key = 'id';
    public static $column_names = array (
      0 => 'name',
      1 => 'address',
      2 => 'phone',
      3 => 'fax',
      4 => 'principal',
      5 => 'principal_phone',
      6 => 'locale',
      7 => 'id',
    );
    public static $column_hash = array (
      'name' => 1,
      'address' => 1,
      'phone' => 1,
      'fax' => 1,
      'principal' => 1,
      'principal_phone' => 1,
      'locale' => 1,
      'id' => 1,
    );
    public static $mixin_classes = array (
    );
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = \LazyRecord\Schema\SchemaLoader::load('OpenFood\\Model\\CompanySchemaProxy');
    }
    public function getName()
    {
        if (isset($this->_data['name'])) {
            return $this->_data['name'];
        }
    }
    public function getAddress()
    {
        if (isset($this->_data['address'])) {
            return $this->_data['address'];
        }
    }
    public function getPhone()
    {
        if (isset($this->_data['phone'])) {
            return $this->_data['phone'];
        }
    }
    public function getFax()
    {
        if (isset($this->_data['fax'])) {
            return $this->_data['fax'];
        }
    }
    public function getPrincipal()
    {
        if (isset($this->_data['principal'])) {
            return $this->_data['principal'];
        }
    }
    public function getPrincipalPhone()
    {
        if (isset($this->_data['principal_phone'])) {
            return $this->_data['principal_phone'];
        }
    }
    public function getLocale()
    {
        if (isset($this->_data['locale'])) {
            return $this->_data['locale'];
        }
    }
    public function getId()
    {
        if (isset($this->_data['id'])) {
            return $this->_data['id'];
        }
    }
}
