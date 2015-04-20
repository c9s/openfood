<?php
namespace OpenFood\Model;
use LazyRecord\BaseCollection;
class CompanyCollectionBase
    extends BaseCollection
{
    const schema_proxy_class = 'OpenFood\\Model\\CompanySchemaProxy';
    const model_class = 'OpenFood\\Model\\Company';
    const table = 'companies';
    const read_source_id = 'default';
    const write_source_id = 'default';
}
