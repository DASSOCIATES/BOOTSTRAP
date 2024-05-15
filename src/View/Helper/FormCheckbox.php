<?php
declare(strict_types=1);

namespace Dassociates\Bootstrap\View\Helper;

use Laminas\Form\View\Helper\FormInput;

class FormCheckbox extends FormInput
{
    protected $validTypes = [
        'bscheckbox' => true,
    ];
    
}