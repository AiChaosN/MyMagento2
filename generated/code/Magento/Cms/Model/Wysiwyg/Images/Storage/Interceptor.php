<?php
namespace Magento\Cms\Model\Wysiwyg\Images\Storage;

/**
 * Interceptor class for @see \Magento\Cms\Model\Wysiwyg\Images\Storage
 */
class Interceptor extends \Magento\Cms\Model\Wysiwyg\Images\Storage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Session $session, \Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Cms\Helper\Wysiwyg\Images $cmsWysiwygImages, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Image\AdapterFactory $imageFactory, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Cms\Model\Wysiwyg\Images\Storage\CollectionFactory $storageCollectionFactory, \Magento\MediaStorage\Model\File\Storage\FileFactory $storageFileFactory, \Magento\MediaStorage\Model\File\Storage\DatabaseFactory $storageDatabaseFactory, \Magento\MediaStorage\Model\File\Storage\Directory\DatabaseFactory $directoryDatabaseFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, array $resizeParameters = [], array $extensions = [], array $dirs = [], array $data = [], ?\Magento\Framework\Filesystem\DriverInterface $file = null, ?\Magento\Framework\Filesystem\Io\File $ioFile = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\File\Mime $mime = null, ?\Magento\Framework\App\Config\ScopeConfigInterface $coreConfig = null)
    {
        $this->___init();
        parent::__construct($session, $backendUrl, $cmsWysiwygImages, $coreFileStorageDb, $filesystem, $imageFactory, $assetRepo, $storageCollectionFactory, $storageFileFactory, $storageDatabaseFactory, $directoryDatabaseFactory, $uploaderFactory, $resizeParameters, $extensions, $dirs, $data, $file, $ioFile, $logger, $mime, $coreConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getDirsCollection($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDirsCollection');
        return $pluginInfo ? $this->___callPlugins('getDirsCollection', func_get_args(), $pluginInfo) : parent::getDirsCollection($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilesCollection($path, $type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilesCollection');
        return $pluginInfo ? $this->___callPlugins('getFilesCollection', func_get_args(), $pluginInfo) : parent::getFilesCollection($path, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection($path = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        return $pluginInfo ? $this->___callPlugins('getCollection', func_get_args(), $pluginInfo) : parent::getCollection($path);
    }

    /**
     * {@inheritdoc}
     */
    public function createDirectory($name, $path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createDirectory');
        return $pluginInfo ? $this->___callPlugins('createDirectory', func_get_args(), $pluginInfo) : parent::createDirectory($name, $path);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteDirectory($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteDirectory');
        return $pluginInfo ? $this->___callPlugins('deleteDirectory', func_get_args(), $pluginInfo) : parent::deleteDirectory($path);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteFile($target)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteFile');
        return $pluginInfo ? $this->___callPlugins('deleteFile', func_get_args(), $pluginInfo) : parent::deleteFile($target);
    }

    /**
     * {@inheritdoc}
     */
    public function uploadFile($targetPath, $type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'uploadFile');
        return $pluginInfo ? $this->___callPlugins('uploadFile', func_get_args(), $pluginInfo) : parent::uploadFile($targetPath, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailPath($filePath, $checkFile = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailPath');
        return $pluginInfo ? $this->___callPlugins('getThumbnailPath', func_get_args(), $pluginInfo) : parent::getThumbnailPath($filePath, $checkFile);
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailUrl($filePath, $checkFile = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailUrl');
        return $pluginInfo ? $this->___callPlugins('getThumbnailUrl', func_get_args(), $pluginInfo) : parent::getThumbnailUrl($filePath, $checkFile);
    }

    /**
     * {@inheritdoc}
     */
    public function resizeFile($source, $keepRatio = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resizeFile');
        return $pluginInfo ? $this->___callPlugins('resizeFile', func_get_args(), $pluginInfo) : parent::resizeFile($source, $keepRatio);
    }

    /**
     * {@inheritdoc}
     */
    public function resizeOnTheFly($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resizeOnTheFly');
        return $pluginInfo ? $this->___callPlugins('resizeOnTheFly', func_get_args(), $pluginInfo) : parent::resizeOnTheFly($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbsPath($filePath = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbsPath');
        return $pluginInfo ? $this->___callPlugins('getThumbsPath', func_get_args(), $pluginInfo) : parent::getThumbsPath($filePath);
    }

    /**
     * {@inheritdoc}
     */
    public function getSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSession');
        return $pluginInfo ? $this->___callPlugins('getSession', func_get_args(), $pluginInfo) : parent::getSession();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedExtensions($type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedExtensions');
        return $pluginInfo ? $this->___callPlugins('getAllowedExtensions', func_get_args(), $pluginInfo) : parent::getAllowedExtensions($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailRoot()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailRoot');
        return $pluginInfo ? $this->___callPlugins('getThumbnailRoot', func_get_args(), $pluginInfo) : parent::getThumbnailRoot();
    }

    /**
     * {@inheritdoc}
     */
    public function isImage($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImage');
        return $pluginInfo ? $this->___callPlugins('isImage', func_get_args(), $pluginInfo) : parent::isImage($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function getResizeWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResizeWidth');
        return $pluginInfo ? $this->___callPlugins('getResizeWidth', func_get_args(), $pluginInfo) : parent::getResizeWidth();
    }

    /**
     * {@inheritdoc}
     */
    public function getResizeHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResizeHeight');
        return $pluginInfo ? $this->___callPlugins('getResizeHeight', func_get_args(), $pluginInfo) : parent::getResizeHeight();
    }

    /**
     * {@inheritdoc}
     */
    public function getCmsWysiwygImages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCmsWysiwygImages');
        return $pluginInfo ? $this->___callPlugins('getCmsWysiwygImages', func_get_args(), $pluginInfo) : parent::getCmsWysiwygImages();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function __debugInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__debugInfo');
        return $pluginInfo ? $this->___callPlugins('__debugInfo', func_get_args(), $pluginInfo) : parent::__debugInfo();
    }
}
