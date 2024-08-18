<?php
namespace Magento\Payment\Model\Method\Adapter;

/**
 * Interceptor class for @see \Magento\Payment\Model\Method\Adapter
 */
class Interceptor extends \Magento\Payment\Model\Method\Adapter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Payment\Gateway\Config\ValueHandlerPoolInterface $valueHandlerPool, \Magento\Payment\Gateway\Data\PaymentDataObjectFactory $paymentDataObjectFactory, $code, $formBlockType, $infoBlockType, ?\Magento\Payment\Gateway\Command\CommandPoolInterface $commandPool = null, ?\Magento\Payment\Gateway\Validator\ValidatorPoolInterface $validatorPool = null, ?\Magento\Payment\Gateway\Command\CommandManagerInterface $commandExecutor = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($eventManager, $valueHandlerPool, $paymentDataObjectFactory, $code, $formBlockType, $infoBlockType, $commandPool, $validatorPool, $commandExecutor, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getValidatorPool()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidatorPool');
        return $pluginInfo ? $this->___callPlugins('getValidatorPool', func_get_args(), $pluginInfo) : parent::getValidatorPool();
    }

    /**
     * {@inheritdoc}
     */
    public function canOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canOrder');
        return $pluginInfo ? $this->___callPlugins('canOrder', func_get_args(), $pluginInfo) : parent::canOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function canAuthorize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canAuthorize');
        return $pluginInfo ? $this->___callPlugins('canAuthorize', func_get_args(), $pluginInfo) : parent::canAuthorize();
    }

    /**
     * {@inheritdoc}
     */
    public function canCapture()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapture');
        return $pluginInfo ? $this->___callPlugins('canCapture', func_get_args(), $pluginInfo) : parent::canCapture();
    }

    /**
     * {@inheritdoc}
     */
    public function canCapturePartial()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapturePartial');
        return $pluginInfo ? $this->___callPlugins('canCapturePartial', func_get_args(), $pluginInfo) : parent::canCapturePartial();
    }

    /**
     * {@inheritdoc}
     */
    public function canCaptureOnce()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCaptureOnce');
        return $pluginInfo ? $this->___callPlugins('canCaptureOnce', func_get_args(), $pluginInfo) : parent::canCaptureOnce();
    }

    /**
     * {@inheritdoc}
     */
    public function canRefund()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefund');
        return $pluginInfo ? $this->___callPlugins('canRefund', func_get_args(), $pluginInfo) : parent::canRefund();
    }

    /**
     * {@inheritdoc}
     */
    public function canRefundPartialPerInvoice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefundPartialPerInvoice');
        return $pluginInfo ? $this->___callPlugins('canRefundPartialPerInvoice', func_get_args(), $pluginInfo) : parent::canRefundPartialPerInvoice();
    }

    /**
     * {@inheritdoc}
     */
    public function canVoid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canVoid');
        return $pluginInfo ? $this->___callPlugins('canVoid', func_get_args(), $pluginInfo) : parent::canVoid();
    }

    /**
     * {@inheritdoc}
     */
    public function canUseInternal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseInternal');
        return $pluginInfo ? $this->___callPlugins('canUseInternal', func_get_args(), $pluginInfo) : parent::canUseInternal();
    }

    /**
     * {@inheritdoc}
     */
    public function canUseCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseCheckout');
        return $pluginInfo ? $this->___callPlugins('canUseCheckout', func_get_args(), $pluginInfo) : parent::canUseCheckout();
    }

    /**
     * {@inheritdoc}
     */
    public function canEdit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canEdit');
        return $pluginInfo ? $this->___callPlugins('canEdit', func_get_args(), $pluginInfo) : parent::canEdit();
    }

    /**
     * {@inheritdoc}
     */
    public function canFetchTransactionInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canFetchTransactionInfo');
        return $pluginInfo ? $this->___callPlugins('canFetchTransactionInfo', func_get_args(), $pluginInfo) : parent::canFetchTransactionInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function canReviewPayment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReviewPayment');
        return $pluginInfo ? $this->___callPlugins('canReviewPayment', func_get_args(), $pluginInfo) : parent::canReviewPayment();
    }

    /**
     * {@inheritdoc}
     */
    public function isGateway()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isGateway');
        return $pluginInfo ? $this->___callPlugins('isGateway', func_get_args(), $pluginInfo) : parent::isGateway();
    }

    /**
     * {@inheritdoc}
     */
    public function isOffline()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOffline');
        return $pluginInfo ? $this->___callPlugins('isOffline', func_get_args(), $pluginInfo) : parent::isOffline();
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializeNeeded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInitializeNeeded');
        return $pluginInfo ? $this->___callPlugins('isInitializeNeeded', func_get_args(), $pluginInfo) : parent::isInitializeNeeded();
    }

    /**
     * {@inheritdoc}
     */
    public function isAvailable(?\Magento\Quote\Api\Data\CartInterface $quote = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAvailable');
        return $pluginInfo ? $this->___callPlugins('isAvailable', func_get_args(), $pluginInfo) : parent::isAvailable($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function isActive($storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isActive');
        return $pluginInfo ? $this->___callPlugins('isActive', func_get_args(), $pluginInfo) : parent::isActive($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function canUseForCountry($country)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseForCountry');
        return $pluginInfo ? $this->___callPlugins('canUseForCountry', func_get_args(), $pluginInfo) : parent::canUseForCountry($country);
    }

    /**
     * {@inheritdoc}
     */
    public function canUseForCurrency($currencyCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseForCurrency');
        return $pluginInfo ? $this->___callPlugins('canUseForCurrency', func_get_args(), $pluginInfo) : parent::canUseForCurrency($currencyCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigData($field, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigData');
        return $pluginInfo ? $this->___callPlugins('getConfigData', func_get_args(), $pluginInfo) : parent::getConfigData($field, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate();
    }

    /**
     * {@inheritdoc}
     */
    public function fetchTransactionInfo(\Magento\Payment\Model\InfoInterface $payment, $transactionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchTransactionInfo');
        return $pluginInfo ? $this->___callPlugins('fetchTransactionInfo', func_get_args(), $pluginInfo) : parent::fetchTransactionInfo($payment, $transactionId);
    }

    /**
     * {@inheritdoc}
     */
    public function order(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'order');
        return $pluginInfo ? $this->___callPlugins('order', func_get_args(), $pluginInfo) : parent::order($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authorize');
        return $pluginInfo ? $this->___callPlugins('authorize', func_get_args(), $pluginInfo) : parent::authorize($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function capture(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'capture');
        return $pluginInfo ? $this->___callPlugins('capture', func_get_args(), $pluginInfo) : parent::capture($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function refund(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'refund');
        return $pluginInfo ? $this->___callPlugins('refund', func_get_args(), $pluginInfo) : parent::refund($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function cancel(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancel');
        return $pluginInfo ? $this->___callPlugins('cancel', func_get_args(), $pluginInfo) : parent::cancel($payment);
    }

    /**
     * {@inheritdoc}
     */
    public function void(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'void');
        return $pluginInfo ? $this->___callPlugins('void', func_get_args(), $pluginInfo) : parent::void($payment);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptPayment(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'acceptPayment');
        return $pluginInfo ? $this->___callPlugins('acceptPayment', func_get_args(), $pluginInfo) : parent::acceptPayment($payment);
    }

    /**
     * {@inheritdoc}
     */
    public function denyPayment(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'denyPayment');
        return $pluginInfo ? $this->___callPlugins('denyPayment', func_get_args(), $pluginInfo) : parent::denyPayment($payment);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCode');
        return $pluginInfo ? $this->___callPlugins('getCode', func_get_args(), $pluginInfo) : parent::getCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        return $pluginInfo ? $this->___callPlugins('getTitle', func_get_args(), $pluginInfo) : parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function setStore($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStore');
        return $pluginInfo ? $this->___callPlugins('setStore', func_get_args(), $pluginInfo) : parent::setStore($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        return $pluginInfo ? $this->___callPlugins('getStore', func_get_args(), $pluginInfo) : parent::getStore();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormBlockType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormBlockType');
        return $pluginInfo ? $this->___callPlugins('getFormBlockType', func_get_args(), $pluginInfo) : parent::getFormBlockType();
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoBlockType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInfoBlockType');
        return $pluginInfo ? $this->___callPlugins('getInfoBlockType', func_get_args(), $pluginInfo) : parent::getInfoBlockType();
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInfoInstance');
        return $pluginInfo ? $this->___callPlugins('getInfoInstance', func_get_args(), $pluginInfo) : parent::getInfoInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function setInfoInstance(\Magento\Payment\Model\InfoInterface $info)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setInfoInstance');
        return $pluginInfo ? $this->___callPlugins('setInfoInstance', func_get_args(), $pluginInfo) : parent::setInfoInstance($info);
    }

    /**
     * {@inheritdoc}
     */
    public function assignData(\Magento\Framework\DataObject $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assignData');
        return $pluginInfo ? $this->___callPlugins('assignData', func_get_args(), $pluginInfo) : parent::assignData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function initialize($paymentAction, $stateObject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initialize');
        return $pluginInfo ? $this->___callPlugins('initialize', func_get_args(), $pluginInfo) : parent::initialize($paymentAction, $stateObject);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigPaymentAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigPaymentAction');
        return $pluginInfo ? $this->___callPlugins('getConfigPaymentAction', func_get_args(), $pluginInfo) : parent::getConfigPaymentAction();
    }

    /**
     * {@inheritdoc}
     */
    public function canSale() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canSale');
        return $pluginInfo ? $this->___callPlugins('canSale', func_get_args(), $pluginInfo) : parent::canSale();
    }

    /**
     * {@inheritdoc}
     */
    public function sale(\Magento\Payment\Model\InfoInterface $payment, float $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sale');
        return $pluginInfo ? $this->___callPlugins('sale', func_get_args(), $pluginInfo) : parent::sale($payment, $amount);
    }
}
