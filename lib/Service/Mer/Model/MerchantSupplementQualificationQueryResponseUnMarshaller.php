<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantSupplementQualificationQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantSupplementQualificationQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantSupplementQualificationQueryResponseUnMarshaller();
    }

    /**
     * @return MerchantSupplementQualificationQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantSupplementQualificationQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantSupplementQualificationQueryResponse();
    }
}

MerchantSupplementQualificationQueryResponseUnMarshaller::__init();
