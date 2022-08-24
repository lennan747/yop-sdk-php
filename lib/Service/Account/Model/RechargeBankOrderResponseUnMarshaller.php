<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeBankOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeBankOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeBankOrderResponseUnMarshaller();
    }

    /**
     * @return RechargeBankOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeBankOrderResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeBankOrderResponse();
    }
}

RechargeBankOrderResponseUnMarshaller::__init();
