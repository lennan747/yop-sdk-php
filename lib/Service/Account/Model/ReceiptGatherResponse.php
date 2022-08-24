<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ReceiptGatherResponse extends BaseResponse
{
    /**
     * @var ReceiptGatherBatchReceiptRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGatherBatchReceiptRespDTOResult';
    }

    /**
     * @param ReceiptGatherBatchReceiptRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptGatherBatchReceiptRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
