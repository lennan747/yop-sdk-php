<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterContributeMicroV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterContributeMicroV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeMicroV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterContributeMicroV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterContributeMicroV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterContributeMicroV2Response();
    }
}

RegisterContributeMicroV2ResponseUnMarshaller::__init();
