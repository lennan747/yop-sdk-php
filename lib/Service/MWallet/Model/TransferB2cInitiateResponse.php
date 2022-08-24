<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferB2cInitiateResponse extends BaseResponse
{
    /**
     * @var TransferB2cInitiateWalletTransferB2CResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cInitiateWalletTransferB2CResponseDTOResult';
    }

    /**
     * @param TransferB2cInitiateWalletTransferB2CResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferB2cInitiateWalletTransferB2CResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
