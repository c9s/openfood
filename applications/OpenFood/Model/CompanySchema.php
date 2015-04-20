<?php
namespace OpenFood\Model;
use LazyRecord\Schema\SchemaDeclare;

class CompanySchema extends SchemaDeclare
{
    public function schema() {

        $this->column('name')
            ->varchar(60)
            ->required()
            ;

        $this->column('address')
            ->varchar(120)
            ;

        $this->column('phone')
            ->varchar(20)
            ;

        $this->column('fax')
            ->varchar(20)
            ;

        $this->column('principal')
            ->varchar(30);

        $this->column('principal_phone')
            ->varchar(20);

        $this->column('locale')
            ->varchar(12)
            ->validValues([ 'en', 'zh_TW' ]);

    }
}
