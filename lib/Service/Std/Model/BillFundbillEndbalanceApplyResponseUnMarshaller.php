<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillEndbalanceApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillEndbalanceApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillEndbalanceApplyResponseUnMarshaller();
    }

    /**
     * @return BillFundbillEndbalanceApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillEndbalanceApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BillFundbillEndbalanceApplyResponse();
    }
}

BillFundbillEndbalanceApplyResponseUnMarshaller::__init();
