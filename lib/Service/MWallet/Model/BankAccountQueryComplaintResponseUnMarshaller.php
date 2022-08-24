<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryComplaintResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryComplaintResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryComplaintResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryComplaintResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryComplaintResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryComplaintResponse();
    }
}

BankAccountQueryComplaintResponseUnMarshaller::__init();
