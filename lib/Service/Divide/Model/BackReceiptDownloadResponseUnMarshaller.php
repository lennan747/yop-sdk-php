<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BackReceiptDownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BackReceiptDownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackReceiptDownloadResponseUnMarshaller();
    }

    /**
     * @return BackReceiptDownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BackReceiptDownloadResponse
     */
    protected function getResponseInstance()
    {
        return new BackReceiptDownloadResponse();
    }
}

BackReceiptDownloadResponseUnMarshaller::__init();
