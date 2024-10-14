<?php

namespace ContainerU6RBxii;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_ExpressionLanguageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'validator.expression_language' shared service.
     *
     * @return \Symfony\Component\ExpressionLanguage\ExpressionLanguage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'ExpressionLanguageProvider.php';

        $container->privates['validator.expression_language'] = $instance = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage(($container->services['cache.validator_expression_language'] ?? self::getCache_ValidatorExpressionLanguageService($container)));

        $instance->registerProvider(new \Symfony\Component\Validator\Constraints\ExpressionLanguageProvider());

        return $instance;
    }
}
