<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterContributeIndexV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterContributeIndexV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeIndexV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterContributeIndexV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterContributeIndexV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterContributeIndexV2Response();
    }
}

RegisterContributeIndexV2ResponseUnMarshaller::__init();
