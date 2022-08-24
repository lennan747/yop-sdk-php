<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MigrateBankQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MigrateBankQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MigrateBankQueryResponseUnMarshaller();
    }

    /**
     * @return MigrateBankQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MigrateBankQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MigrateBankQueryResponse();
    }
}

MigrateBankQueryResponseUnMarshaller::__init();
