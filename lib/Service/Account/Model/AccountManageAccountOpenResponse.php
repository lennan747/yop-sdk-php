<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountManageAccountOpenResponse extends BaseResponse
{
    /**
     * @var AccountManageAccountOpenAccountBookCreateResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenAccountBookCreateResponseDtoResult';
    }

    /**
     * @param AccountManageAccountOpenAccountBookCreateResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountManageAccountOpenAccountBookCreateResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
