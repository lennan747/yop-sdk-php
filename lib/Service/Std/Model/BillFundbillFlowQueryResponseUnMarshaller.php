<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillFlowQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillFlowQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillFlowQueryResponseUnMarshaller();
    }

    /**
     * @return BillFundbillFlowQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillFlowQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BillFundbillFlowQueryResponse();
    }
}

BillFundbillFlowQueryResponseUnMarshaller::__init();
