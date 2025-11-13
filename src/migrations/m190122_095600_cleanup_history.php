<?php

namespace roelvanhintum\enforcepassword\migrations;

use roelvanhintum\enforcepassword\records\Password as PasswordRecord;

use craft\db\Migration;

class m190122_095600_cleanup_history extends Migration
{
    public function safeUp()
    {
        $oldPasswordRecords = PasswordRecord::find()
            ->all();

        // Delete empty passwords.
        foreach ($oldPasswordRecords as $oldPasswordRecord) {
            if (empty($oldPasswordRecord->password)) {
                $oldPasswordRecord->delete();
            }
        }

        return true;
    }

    public function safeDown()
    {
        return true;
    }
}
