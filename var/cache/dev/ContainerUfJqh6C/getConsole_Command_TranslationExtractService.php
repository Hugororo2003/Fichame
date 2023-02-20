<?php

namespace ContainerUfJqh6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', 'C:\\Fichame2/translations', 'C:\\Fichame2/templates', [0 => 'C:\\Fichame2\\vendor\\symfony\\validator/Resources/translations', 1 => 'C:\\Fichame2\\vendor\\symfony\\form/Resources/translations', 2 => 'C:\\Fichame2\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'C:\\Fichame2\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'C:\\Fichame2\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'C:\\Fichame2\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 3 => 'C:\\Fichame2\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 4 => 'C:\\Fichame2\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php', 5 => 'C:\\Fichame2\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 6 => 'C:\\Fichame2\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 7 => 'C:\\Fichame2\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 8 => 'C:\\Fichame2\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php', 9 => 'C:\\Fichame2\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 10 => 'C:\\Fichame2\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 11 => 'C:\\Fichame2\\vendor\\symfony\\validator\\ValidatorBuilder.php', 12 => 'C:\\Fichame2\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 13 => 'C:\\Fichame2\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php', 14 => 'C:\\Fichame2\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'], []);

        $instance->setName('translation:extract');
        $instance->setDescription('Extract missing translations keys from code to translation files.');

        return $instance;
    }
}
