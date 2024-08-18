<?php
namespace Magento\Config\Console\Command\LocaleEmulator;

/**
 * Interceptor class for @see \Magento\Config\Console\Command\LocaleEmulator
 */
class Interceptor extends \Magento\Config\Console\Command\LocaleEmulator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\TranslateInterface $translate, \Magento\Framework\Phrase\RendererInterface $phraseRenderer, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Locale\ResolverInterface $defaultLocaleResolver)
    {
        $this->___init();
        parent::__construct($translate, $phraseRenderer, $localeResolver, $defaultLocaleResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function emulate(callable $callback, ?string $locale = null) : mixed
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'emulate');
        return $pluginInfo ? $this->___callPlugins('emulate', func_get_args(), $pluginInfo) : parent::emulate($callback, $locale);
    }
}
