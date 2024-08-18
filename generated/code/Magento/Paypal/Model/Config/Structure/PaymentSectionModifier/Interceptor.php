<?php
namespace Magento\Paypal\Model\Config\Structure\PaymentSectionModifier;

/**
 * Interceptor class for @see \Magento\Paypal\Model\Config\Structure\PaymentSectionModifier
 */
class Interceptor extends \Magento\Paypal\Model\Config\Structure\PaymentSectionModifier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function modify(array $initialStructure)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modify');
        return $pluginInfo ? $this->___callPlugins('modify', func_get_args(), $pluginInfo) : parent::modify($initialStructure);
    }
}
