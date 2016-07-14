<?php

namespace humhub\modules\karma\widgets;

use Yii;
use humhub\modules\user\models\User;
use humhub\models\Setting;

/**
 * KarmaScoreProfile. 
 * Displays karma score on profile
 * 
 * @package humhub.modules_core.user.widgets
 * @since 0.5
 * @author Luke
 */
class KarmaScoreProfile extends \yii\base\Widget
{

    /**
     * The user object
     *
     * @var User
     */
    public $user;


    /**
     * Executes the widget.
     */
    public function run()
    {
        return $this->render('karmaScoreProfile', array('user' => $this->user));
    }
    
}


