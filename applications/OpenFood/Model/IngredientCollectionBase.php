<?php
namespace OpenFood\Model;
use LazyRecord\BaseCollection;
class IngredientCollectionBase
    extends BaseCollection
{
    const schema_proxy_class = 'OpenFood\\Model\\IngredientSchemaProxy';
    const model_class = 'OpenFood\\Model\\Ingredient';
    const table = 'ingredients';
    const read_source_id = 'default';
    const write_source_id = 'default';
}
