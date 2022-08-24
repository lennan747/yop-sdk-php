<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RecordQueryResponse extends BaseResponse
{
    /**
     * @var RecordQueryQueryApplyInvoiceResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RecordQueryQueryApplyInvoiceResponseDTOResult';
    }

    /**
     * @param RecordQueryQueryApplyInvoiceResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RecordQueryQueryApplyInvoiceResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
