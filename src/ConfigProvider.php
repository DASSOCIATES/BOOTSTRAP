<?php
use Laminas\ServiceManager\Factory\InvokableFactory;

declare(strict_types=1);

namespace Dassociates\Bootstrap\;

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
                    'formcheckbox'               => View\Helper\FormCheckbox::class,
                    'form_checkbox'              => View\Helper\FormCheckbox::class,
                    'formCheckbox'               => View\Helper\FormCheckbox::class,
                    'FormCheckbox'               => View\Helper\FormCheckbox::class,
                ],
                'factories' => [
                    View\Helper\FormCheckbox::class     => InvokableFactory::class,
                ],
            ],
        ];
    }
}