<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawRuleQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawRuleQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawRuleQueryResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawRuleQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawRuleQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawRuleQueryResponse();
    }
}

AutoWithdrawRuleQueryResponseUnMarshaller::__init();
