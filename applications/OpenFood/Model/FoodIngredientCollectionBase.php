<?php
namespace OpenFood\Model;
use LazyRecord\BaseCollection;
class FoodIngredientCollectionBase
    extends BaseCollection
{
    const schema_proxy_class = 'OpenFood\\Model\\FoodIngredientSchemaProxy';
    const model_class = 'OpenFood\\Model\\FoodIngredient';
    const table = 'food_ingredients';
    const read_source_id = 'default';
    const write_source_id = 'default';
}
