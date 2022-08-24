<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundReceiptDownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundReceiptDownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundReceiptDownloadResponseUnMarshaller();
    }

    /**
     * @return RefundReceiptDownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundReceiptDownloadResponse
     */
    protected function getResponseInstance()
    {
        return new RefundReceiptDownloadResponse();
    }
}

RefundReceiptDownloadResponseUnMarshaller::__init();
