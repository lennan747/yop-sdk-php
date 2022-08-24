<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountQueryResponse extends BaseResponse
{
    /**
     * @var AccountQueryWalletMemberResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryWalletMemberResponseDTOResult';
    }

    /**
     * @param AccountQueryWalletMemberResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountQueryWalletMemberResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
