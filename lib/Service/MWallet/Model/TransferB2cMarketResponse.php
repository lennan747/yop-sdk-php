<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferB2cMarketResponse extends BaseResponse
{
    /**
     * @var TransferB2cMarketWalletTransferB2CResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cMarketWalletTransferB2CResponseDTOResult';
    }

    /**
     * @param TransferB2cMarketWalletTransferB2CResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferB2cMarketWalletTransferB2CResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
