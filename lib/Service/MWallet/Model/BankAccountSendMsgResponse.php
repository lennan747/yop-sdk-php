<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountSendMsgResponse extends BaseResponse
{
    /**
     * @var BankAccountSendMsgBankShortMsgResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountSendMsgBankShortMsgResponseDTOResult';
    }

    /**
     * @param BankAccountSendMsgBankShortMsgResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountSendMsgBankShortMsgResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
