<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawRuleCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawRuleCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawRuleCancelResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawRuleCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawRuleCancelResponse
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawRuleCancelResponse();
    }
}

AutoWithdrawRuleCancelResponseUnMarshaller::__init();
