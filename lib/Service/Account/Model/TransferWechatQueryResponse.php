<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferWechatQueryResponse extends BaseResponse
{
    /**
     * @var TransferWechatQueryQueryWechatTransferRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatQueryQueryWechatTransferRespDTOResult';
    }

    /**
     * @param TransferWechatQueryQueryWechatTransferRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferWechatQueryQueryWechatTransferRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
