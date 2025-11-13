<?php

namespace roelvanhintum\enforcepassword\console\controllers;

use roelvanhintum\enforcepassword\Plugin as EnforcePassword;

use yii\console\Controller;

/**
 * Enforces password resets.
 */
class DefaultController extends Controller
{
    /**
     * Queue's the password reset task.
     */
    public function actionIndex()
    {
        echo "Queue password resets.\n";

        EnforcePassword::$plugin->history->queuePasswordResets();

        return "Done queueing password resets.";
    }
}
