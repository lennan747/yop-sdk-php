<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseWithholdingOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseWithholdingOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseWithholdingOrderResponseUnMarshaller();
    }

    /**
     * @return EnterpriseWithholdingOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseWithholdingOrderResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseWithholdingOrderResponse();
    }
}

EnterpriseWithholdingOrderResponseUnMarshaller::__init();
