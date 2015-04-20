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
      1 => 'scientific_name',
      2 => 'other_names',
      3 => 'name_en',
      4 => 'name_zh_TW',
      5 => 'scientific_name_en',
      6 => 'scientific_name_zh_TW',
      7 => 'other_names_en',
      8 => 'other_names_zh_TW',
      9 => 'id',
    );
    public static $column_hash = array (
      'name' => 1,
      'scientific_name' => 1,
      'other_names' => 1,
      'name_en' => 1,
      'name_zh_TW' => 1,
      'scientific_name_en' => 1,
      'scientific_name_zh_TW' => 1,
      'other_names_en' => 1,
      'other_names_zh_TW' => 1,
      'id' => 1,
    );
    public static $mixin_classes = array (
      0 => 'LazyRecord\\Schema\\Mixin\\LocalizeMixinSchema',
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
    public function getScientificName()
    {
        if (isset($this->_data['scientific_name'])) {
            return $this->_data['scientific_name'];
        }
    }
    public function getOtherNames()
    {
        if (isset($this->_data['other_names'])) {
            return $this->_data['other_names'];
        }
    }
    public function getNameEn()
    {
        if (isset($this->_data['name_en'])) {
            return $this->_data['name_en'];
        }
    }
    public function getNameZhTW()
    {
        if (isset($this->_data['name_zh_TW'])) {
            return $this->_data['name_zh_TW'];
        }
    }
    public function getScientificNameEn()
    {
        if (isset($this->_data['scientific_name_en'])) {
            return $this->_data['scientific_name_en'];
        }
    }
    public function getScientificNameZhTW()
    {
        if (isset($this->_data['scientific_name_zh_TW'])) {
            return $this->_data['scientific_name_zh_TW'];
        }
    }
    public function getOtherNamesEn()
    {
        if (isset($this->_data['other_names_en'])) {
            return $this->_data['other_names_en'];
        }
    }
    public function getOtherNamesZhTW()
    {
        if (isset($this->_data['other_names_zh_TW'])) {
            return $this->_data['other_names_zh_TW'];
        }
    }
    public function getId()
    {
        if (isset($this->_data['id'])) {
            return $this->_data['id'];
        }
    }
}
