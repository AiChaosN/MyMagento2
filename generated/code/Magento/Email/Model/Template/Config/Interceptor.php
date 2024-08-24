<?php
namespace Magento\Email\Model\Template\Config;

/**
 * Interceptor class for @see \Magento\Email\Model\Template\Config
 */
class Interceptor extends \Magento\Email\Model\Template\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Email\Model\Template\Config\Data $dataStorage, \Magento\Framework\Module\Dir\Reader $moduleReader, \Magento\Framework\View\FileSystem $viewFileSystem, \Magento\Framework\View\Design\Theme\ThemePackageList $themePackages, \Magento\Framework\Filesystem\Directory\ReadFactory $readDirFactory)
    {
        $this->___init();
        parent::__construct($dataStorage, $moduleReader, $viewFileSystem, $themePackages, $readDirFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableTemplates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableTemplates');
        return $pluginInfo ? $this->___callPlugins('getAvailableTemplates', func_get_args(), $pluginInfo) : parent::getAvailableTemplates();
    }

    /**
     * {@inheritdoc}
     */
    public function getThemeTemplates($templateId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThemeTemplates');
        return $pluginInfo ? $this->___callPlugins('getThemeTemplates', func_get_args(), $pluginInfo) : parent::getThemeTemplates($templateId);
    }

    /**
     * {@inheritdoc}
     */
    public function parseTemplateIdParts($templateId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'parseTemplateIdParts');
        return $pluginInfo ? $this->___callPlugins('parseTemplateIdParts', func_get_args(), $pluginInfo) : parent::parseTemplateIdParts($templateId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateLabel($templateId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateLabel');
        return $pluginInfo ? $this->___callPlugins('getTemplateLabel', func_get_args(), $pluginInfo) : parent::getTemplateLabel($templateId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateType($templateId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateType');
        return $pluginInfo ? $this->___callPlugins('getTemplateType', func_get_args(), $pluginInfo) : parent::getTemplateType($templateId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateModule($templateId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateModule');
        return $pluginInfo ? $this->___callPlugins('getTemplateModule', func_get_args(), $pluginInfo) : parent::getTemplateModule($templateId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateArea($templateId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateArea');
        return $pluginInfo ? $this->___callPlugins('getTemplateArea', func_get_args(), $pluginInfo) : parent::getTemplateArea($templateId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFilename($templateId, $designParams = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFilename');
        return $pluginInfo ? $this->___callPlugins('getTemplateFilename', func_get_args(), $pluginInfo) : parent::getTemplateFilename($templateId, $designParams);
    }
}
