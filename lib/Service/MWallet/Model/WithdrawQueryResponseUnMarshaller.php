<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawQueryResponseUnMarshaller();
    }

    /**
     * @return WithdrawQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawQueryResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawQueryResponse();
    }
}

WithdrawQueryResponseUnMarshaller::__init();
