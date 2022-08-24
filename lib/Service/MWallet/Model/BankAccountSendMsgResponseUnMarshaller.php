<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountSendMsgResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountSendMsgResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountSendMsgResponseUnMarshaller();
    }

    /**
     * @return BankAccountSendMsgResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountSendMsgResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountSendMsgResponse();
    }
}

BankAccountSendMsgResponseUnMarshaller::__init();
