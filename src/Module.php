<?php
declare(strict_types=1);

namespace Dassociates\Bootstrap;

use Laminas\ModuleManager\Feature\FormElementProviderInterface;
use Laminas\ServiceManager\Factory\InvokableFactory;

final class Module implements FormElementProviderInterface
{
    public function getConfig(): array
    {
        $provider = new ConfigProvider();
        return $provider->getDependencyConfig();
    }
    
    public function getFormElementConfig()
    {
        return [
            'aliases' => [
                'checkbox' => Element\Checkbox::class,
            ],
            'factories' => [
                Element\Checkbox::class => InvokableFactory::class,
            ],
        ];
    }

}