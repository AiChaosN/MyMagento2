<?php
namespace Magento\AsyncConfig\Model\AsyncConfigPublisher;

/**
 * Interceptor class for @see \Magento\AsyncConfig\Model\AsyncConfigPublisher
 */
class Interceptor extends \Magento\AsyncConfig\Model\AsyncConfigPublisher implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AsyncConfig\Api\Data\AsyncConfigMessageInterfaceFactory $asyncConfigFactory, \Magento\Framework\MessageQueue\PublisherInterface $publisher, \Magento\Framework\Serialize\Serializer\Json $json, \Magento\Framework\Filesystem\DirectoryList $dir, \Magento\Framework\Filesystem\Io\File $file)
    {
        $this->___init();
        parent::__construct($asyncConfigFactory, $publisher, $json, $dir, $file);
    }

    /**
     * {@inheritdoc}
     */
    public function saveConfigData(array $configData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveConfigData');
        return $pluginInfo ? $this->___callPlugins('saveConfigData', func_get_args(), $pluginInfo) : parent::saveConfigData($configData);
    }
}
