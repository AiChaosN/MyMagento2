<?php
namespace Magento\Deploy\Service\DeployStaticContent;

/**
 * Interceptor class for @see \Magento\Deploy\Service\DeployStaticContent
 */
class Interceptor extends \Magento\Deploy\Service\DeployStaticContent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Psr\Log\LoggerInterface $logger, \Magento\Framework\App\View\Deployment\Version\StorageInterface $versionStorage, \Magento\Deploy\Strategy\DeployStrategyFactory $deployStrategyFactory, \Magento\Deploy\Process\QueueFactory $queueFactory)
    {
        $this->___init();
        parent::__construct($objectManager, $logger, $versionStorage, $deployStrategyFactory, $queueFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function deploy(array $options)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deploy');
        return $pluginInfo ? $this->___callPlugins('deploy', func_get_args(), $pluginInfo) : parent::deploy($options);
    }
}
