<?php
namespace Magento\Cms\Model\Page\DataProvider;

/**
 * Interceptor class for @see \Magento\Cms\Model\Page\DataProvider
 */
class Interceptor extends \Magento\Cms\Model\Page\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $pool = null, ?\Magento\Framework\AuthorizationInterface $auth = null, ?\Magento\Framework\App\RequestInterface $request = null, ?\Magento\Cms\Model\Page\CustomLayoutManagerInterface $customLayoutManager = null, ?\Magento\Cms\Api\PageRepositoryInterface $pageRepository = null, ?\Magento\Cms\Model\PageFactory $pageFactory = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $pageCollectionFactory, $dataPersistor, $meta, $data, $pool, $auth, $request, $customLayoutManager, $pageRepository, $pageFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareMeta(array $meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareMeta');
        return $pluginInfo ? $this->___callPlugins('prepareMeta', func_get_args(), $pluginInfo) : parent::prepareMeta($meta);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMeta');
        return $pluginInfo ? $this->___callPlugins('getMeta', func_get_args(), $pluginInfo) : parent::getMeta();
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        return $pluginInfo ? $this->___callPlugins('getCollection', func_get_args(), $pluginInfo) : parent::getCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryFieldName');
        return $pluginInfo ? $this->___callPlugins('getPrimaryFieldName', func_get_args(), $pluginInfo) : parent::getPrimaryFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequestFieldName');
        return $pluginInfo ? $this->___callPlugins('getRequestFieldName', func_get_args(), $pluginInfo) : parent::getRequestFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldSetMetaInfo($fieldSetName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldSetMetaInfo');
        return $pluginInfo ? $this->___callPlugins('getFieldSetMetaInfo', func_get_args(), $pluginInfo) : parent::getFieldSetMetaInfo($fieldSetName);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldsMetaInfo($fieldSetName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldsMetaInfo');
        return $pluginInfo ? $this->___callPlugins('getFieldsMetaInfo', func_get_args(), $pluginInfo) : parent::getFieldsMetaInfo($fieldSetName);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldMetaInfo($fieldSetName, $fieldName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldMetaInfo');
        return $pluginInfo ? $this->___callPlugins('getFieldMetaInfo', func_get_args(), $pluginInfo) : parent::getFieldMetaInfo($fieldSetName, $fieldName);
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter(\Magento\Framework\Api\Filter $filter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilter');
        return $pluginInfo ? $this->___callPlugins('addFilter', func_get_args(), $pluginInfo) : parent::addFilter($filter);
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchCriteria()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchCriteria');
        return $pluginInfo ? $this->___callPlugins('getSearchCriteria', func_get_args(), $pluginInfo) : parent::getSearchCriteria();
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchResult()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchResult');
        return $pluginInfo ? $this->___callPlugins('getSearchResult', func_get_args(), $pluginInfo) : parent::getSearchResult();
    }

    /**
     * {@inheritdoc}
     */
    public function addField($field, $alias = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addField');
        return $pluginInfo ? $this->___callPlugins('addField', func_get_args(), $pluginInfo) : parent::addField($field, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function addOrder($field, $direction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrder');
        return $pluginInfo ? $this->___callPlugins('addOrder', func_get_args(), $pluginInfo) : parent::addOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function setLimit($offset, $size)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLimit');
        return $pluginInfo ? $this->___callPlugins('setLimit', func_get_args(), $pluginInfo) : parent::setLimit($offset, $size);
    }

    /**
     * {@inheritdoc}
     */
    public function removeField($field, $isAlias = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeField');
        return $pluginInfo ? $this->___callPlugins('removeField', func_get_args(), $pluginInfo) : parent::removeField($field, $isAlias);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllFields');
        return $pluginInfo ? $this->___callPlugins('removeAllFields', func_get_args(), $pluginInfo) : parent::removeAllFields();
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'count');
        return $pluginInfo ? $this->___callPlugins('count', func_get_args(), $pluginInfo) : parent::count();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigData');
        return $pluginInfo ? $this->___callPlugins('getConfigData', func_get_args(), $pluginInfo) : parent::getConfigData();
    }

    /**
     * {@inheritdoc}
     */
    public function setConfigData($config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConfigData');
        return $pluginInfo ? $this->___callPlugins('setConfigData', func_get_args(), $pluginInfo) : parent::setConfigData($config);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIds');
        return $pluginInfo ? $this->___callPlugins('getAllIds', func_get_args(), $pluginInfo) : parent::getAllIds();
    }
}
