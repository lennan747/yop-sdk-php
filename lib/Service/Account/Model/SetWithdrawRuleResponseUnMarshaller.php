<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SetWithdrawRuleResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SetWithdrawRuleResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SetWithdrawRuleResponseUnMarshaller();
    }

    /**
     * @return SetWithdrawRuleResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SetWithdrawRuleResponse
     */
    protected function getResponseInstance()
    {
        return new SetWithdrawRuleResponse();
    }
}

SetWithdrawRuleResponseUnMarshaller::__init();
