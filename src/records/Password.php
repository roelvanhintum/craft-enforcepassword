<?php

namespace roelvanhintum\enforcepassword\records;

use craft\db\ActiveRecord;

class Password extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%enforcepassword_password}}';
    }
}
