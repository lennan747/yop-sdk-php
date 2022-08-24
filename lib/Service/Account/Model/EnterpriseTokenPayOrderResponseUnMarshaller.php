<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseTokenPayOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseTokenPayOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseTokenPayOrderResponseUnMarshaller();
    }

    /**
     * @return EnterpriseTokenPayOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseTokenPayOrderResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseTokenPayOrderResponse();
    }
}

EnterpriseTokenPayOrderResponseUnMarshaller::__init();
