<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterContributeMerchantV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterContributeMerchantV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeMerchantV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterContributeMerchantV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterContributeMerchantV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterContributeMerchantV2Response();
    }
}

RegisterContributeMerchantV2ResponseUnMarshaller::__init();
