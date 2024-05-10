<?php
declare(strict_types=1);

namespace Dassociates\Bootstrap;

use Laminas\Form\ConfigProvider;

final class Module
{
    public function getConfig(): array
    {
        $provider = new ConfigProvider();
        return [
            'service_manager' => $provider->getDependencyConfig(),
        ];
    }
}