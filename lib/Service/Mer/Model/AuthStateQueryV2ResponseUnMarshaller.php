<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AuthStateQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AuthStateQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AuthStateQueryV2ResponseUnMarshaller();
    }

    /**
     * @return AuthStateQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AuthStateQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new AuthStateQueryV2Response();
    }
}

AuthStateQueryV2ResponseUnMarshaller::__init();
