<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantDisposeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantDisposeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantDisposeQueryResponseUnMarshaller();
    }

    /**
     * @return MerchantDisposeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantDisposeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantDisposeQueryResponse();
    }
}

MerchantDisposeQueryResponseUnMarshaller::__init();
