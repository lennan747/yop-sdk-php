<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferB2bQueryResponse extends BaseResponse
{
    /**
     * @var TransferB2bQueryMgTransferOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bQueryMgTransferOrderQueryRespDTOResult';
    }

    /**
     * @param TransferB2bQueryMgTransferOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferB2bQueryMgTransferOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
