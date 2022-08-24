<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantInfoModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantInfoModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantInfoModifyResponseUnMarshaller();
    }

    /**
     * @return MerchantInfoModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantInfoModifyResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantInfoModifyResponse();
    }
}

MerchantInfoModifyResponseUnMarshaller::__init();
