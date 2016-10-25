<?php

/**
 * Connected Communities Initiative
 * Copyright (C) 2016 Queensland University of Technology
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * KarmaScoreProfile. 
 * Displays karma score on profile
 * 
 * @package humhub.modules_core.user.widgets
 * @since 0.5
 * @author Luke
 */
class KarmaScoreProfile extends HWidget
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
        $this->render('karmaScoreProfile', array('user' => $this->user));
    }
    
}


