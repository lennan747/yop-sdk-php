<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountManageBankAccountOpenResponse extends BaseResponse
{
    /**
     * @var AccountManageBankAccountOpenStandardOpenAccountResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountOpenStandardOpenAccountResponseDTOResult';
    }

    /**
     * @param AccountManageBankAccountOpenStandardOpenAccountResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountManageBankAccountOpenStandardOpenAccountResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
