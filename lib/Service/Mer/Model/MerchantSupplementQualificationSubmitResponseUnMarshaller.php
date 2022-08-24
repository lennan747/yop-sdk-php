<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantSupplementQualificationSubmitResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantSupplementQualificationSubmitResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantSupplementQualificationSubmitResponseUnMarshaller();
    }

    /**
     * @return MerchantSupplementQualificationSubmitResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantSupplementQualificationSubmitResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantSupplementQualificationSubmitResponse();
    }
}

MerchantSupplementQualificationSubmitResponseUnMarshaller::__init();
