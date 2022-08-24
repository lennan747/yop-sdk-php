<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAccountBookPayOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAccountBookPayOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAccountBookPayOrderResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAccountBookPayOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAccountBookPayOrderResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAccountBookPayOrderResponse();
    }
}

EnterpriseAccountBookPayOrderResponseUnMarshaller::__init();
