<?php
namespace Magento\Inventory\Model\SourceItem\Command\Handler\SourceItemsSaveHandler;

/**
 * Interceptor class for @see \Magento\Inventory\Model\SourceItem\Command\Handler\SourceItemsSaveHandler
 */
class Interceptor extends \Magento\Inventory\Model\SourceItem\Command\Handler\SourceItemsSaveHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Inventory\Model\SourceItem\Validator\SourceItemsValidator $sourceItemsValidator, \Magento\Inventory\Model\ResourceModel\SourceItem\SaveMultiple $saveMultiple, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($sourceItemsValidator, $saveMultiple, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $sourceItems)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sourceItems);
    }
}
