<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountUpdateKeyWordsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountUpdateKeyWordsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountUpdateKeyWordsResponseUnMarshaller();
    }

    /**
     * @return BankAccountUpdateKeyWordsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountUpdateKeyWordsResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountUpdateKeyWordsResponse();
    }
}

BankAccountUpdateKeyWordsResponseUnMarshaller::__init();
