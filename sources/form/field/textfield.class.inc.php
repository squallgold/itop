<?php

// Copyright (C) 2010-2016 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

namespace Combodo\iTop\Form\Field;

use \Combodo\iTop\Form\Field\Field;

/**
 * Description of TextField
 *
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 */
abstract class TextField extends Field
{

    /**
     * Checks the validators to see if the field's current value is valid.
     * Then sets $bValid and $aErrorMessages.
     * 
     * @return boolean
     */
    public function Validate()
    {
        $this->SetValid(true);
        $this->EmptyErrorMessages();
        foreach ($this->GetValidators() as $oValidator)
        {
            if (!preg_match($oValidator->GetRegExp(true), $this->GetCurrentValue()))
            {
                $this->SetValid(false);
                $this->AddErrorMessage($oValidator->GetErrorMessage());
            }
        }

        return $this->GetValid();
    }

}
