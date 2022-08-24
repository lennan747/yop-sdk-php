<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillBolEndbalanceApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillBolEndbalanceApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillBolEndbalanceApplyResponseUnMarshaller();
    }

    /**
     * @return BillFundbillBolEndbalanceApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillBolEndbalanceApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BillFundbillBolEndbalanceApplyResponse();
    }
}

BillFundbillBolEndbalanceApplyResponseUnMarshaller::__init();
