<?php
declare(strict_types=1);

namespace Dassociates\Bootstrap\View\Helper\Factory;

use Laminas\Form\View\Helper\FormElement;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use Dassociates\Bootstrap\View\Helper\FormCheckbox;

class FormCheckboxFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        /**
         * 
         * @var FormElement $view_helper
         */
        $view_helper = $container->get('ViewHelperManager')->get(FormElement::class);
        $view_helper->addType('bscheckbox', FormCheckbox::class);
        return null === $options ? new $requestedName() : new $requestedName($options);
    }
}