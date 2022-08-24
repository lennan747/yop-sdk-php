<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountManageAccountQueryResponse extends BaseResponse
{
    /**
     * @var AccountManageAccountQueryAccountBalanceQueryResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountQueryAccountBalanceQueryResponseDtoResult';
    }

    /**
     * @param AccountManageAccountQueryAccountBalanceQueryResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountManageAccountQueryAccountBalanceQueryResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
