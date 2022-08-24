<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillBolSettleApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillBolSettleApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillBolSettleApplyResponseUnMarshaller();
    }

    /**
     * @return BillFundbillBolSettleApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillBolSettleApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BillFundbillBolSettleApplyResponse();
    }
}

BillFundbillBolSettleApplyResponseUnMarshaller::__init();
