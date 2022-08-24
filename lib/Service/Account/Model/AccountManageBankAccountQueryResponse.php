<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountManageBankAccountQueryResponse extends BaseResponse
{
    /**
     * @var AccountManageBankAccountQueryStandardOpenAccountQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountQueryStandardOpenAccountQueryResponseDTOResult';
    }

    /**
     * @param AccountManageBankAccountQueryStandardOpenAccountQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountManageBankAccountQueryStandardOpenAccountQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
