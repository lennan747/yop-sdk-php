<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterQueryV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterQueryV2Response();
    }
}

RegisterQueryV2ResponseUnMarshaller::__init();
