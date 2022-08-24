<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountBookRefundResponse extends BaseResponse
{
    /**
     * @var AccountBookRefundAccountBookRefundRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundAccountBookRefundRespDTOResult';
    }

    /**
     * @param AccountBookRefundAccountBookRefundRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookRefundAccountBookRefundRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
