<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WithdrawQueryResponse extends BaseResponse
{
    /**
     * @var WithdrawQueryWalletQueryWithdrawResultDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawQueryWalletQueryWithdrawResultDTOResult';
    }

    /**
     * @param WithdrawQueryWalletQueryWithdrawResultDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawQueryWalletQueryWithdrawResultDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
