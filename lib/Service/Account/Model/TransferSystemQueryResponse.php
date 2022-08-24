<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferSystemQueryResponse extends BaseResponse
{
    /**
     * @var TransferSystemQueryMgTransferOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferSystemQueryMgTransferOrderQueryRespDTOResult';
    }

    /**
     * @param TransferSystemQueryMgTransferOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferSystemQueryMgTransferOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
