<?php
declare(strict_types=1);

namespace Dassociates\Bootstrap;

use Laminas\ServiceManager\Factory\InvokableFactory;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }
    
    public function getDependencyConfig(): array
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'bsformcheckbox'             => View\Helper\FormCheckbox::class,
                    'bsform_checkbox'            => View\Helper\FormCheckbox::class,
                    'bsformCheckbox'             => View\Helper\FormCheckbox::class,
                    'bsFormCheckbox'             => View\Helper\FormCheckbox::class,
                ],
                'factories' => [
                    View\Helper\FormCheckbox::class => InvokableFactory::class,
                ],
            ],
        ];
    }
}