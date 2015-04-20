<?php
namespace OpenFood\Model;
use LazyRecord\ModelTrait\RevisionModelTrait;
use LazyRecord\BaseCollection;
class FoodCollectionBase
    extends BaseCollection
{
    use RevisionModelTrait;
    const schema_proxy_class = 'OpenFood\\Model\\FoodSchemaProxy';
    const model_class = 'OpenFood\\Model\\Food';
    const table = 'foods';
    const read_source_id = 'default';
    const write_source_id = 'default';
}
