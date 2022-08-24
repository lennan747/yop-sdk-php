<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MigrateBankOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MigrateBankOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MigrateBankOrderResponseUnMarshaller();
    }

    /**
     * @return MigrateBankOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MigrateBankOrderResponse
     */
    protected function getResponseInstance()
    {
        return new MigrateBankOrderResponse();
    }
}

MigrateBankOrderResponseUnMarshaller::__init();
