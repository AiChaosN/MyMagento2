<?php
namespace Magento\InventorySales\Model\AreProductsSalable;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\AreProductsSalable
 */
class Interceptor extends \Magento\InventorySales\Model\AreProductsSalable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventorySalesApi\Api\IsProductSalableInterface $isProductSalable, \Magento\InventorySalesApi\Api\Data\IsProductSalableResultInterfaceFactory $isProductSalableResultFactory)
    {
        $this->___init();
        parent::__construct($isProductSalable, $isProductSalableResultFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $skus, int $stockId) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($skus, $stockId);
    }
}
