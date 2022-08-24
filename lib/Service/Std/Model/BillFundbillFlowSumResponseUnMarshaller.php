<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillFlowSumResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillFlowSumResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillFlowSumResponseUnMarshaller();
    }

    /**
     * @return BillFundbillFlowSumResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillFlowSumResponse
     */
    protected function getResponseInstance()
    {
        return new BillFundbillFlowSumResponse();
    }
}

BillFundbillFlowSumResponseUnMarshaller::__init();
