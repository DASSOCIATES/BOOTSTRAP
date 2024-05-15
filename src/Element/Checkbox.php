<?php
declare(strict_types=1);

namespace Dassociates\Bootstrap\Element;

use Laminas\Form\Element;
use Laminas\InputFilter\InputProviderInterface;

class Checkbox extends Element implements InputProviderInterface
{
    /** @var array<string, scalar|null>  */
    protected $attributes = [
        'type' => 'bscheckbox',
    ];
    
    public function getInputSpecification()
    {
        $spec = [
            'required' => true,
        ];
        
        $name = $this->getName();
        if ($name !== null) {
            $spec['name'] = $name;
        }
        
        if ($validator = $this->getValidator()) {
            $spec['validators'] = [
                $validator,
            ];
        }
        
        return $spec;
    }
}