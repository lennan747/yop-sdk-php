<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferB2cQueryResponse extends BaseResponse
{
    /**
     * @var TransferB2cQueryQueryMGB2CResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cQueryQueryMGB2CResponseDTOResult';
    }

    /**
     * @param TransferB2cQueryQueryMGB2CResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferB2cQueryQueryMGB2CResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
