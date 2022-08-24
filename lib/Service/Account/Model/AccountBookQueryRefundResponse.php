<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountBookQueryRefundResponse extends BaseResponse
{
    /**
     * @var AccountBookQueryRefundQueryAccountBookRefundRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookQueryRefundQueryAccountBookRefundRespDTOResult';
    }

    /**
     * @param AccountBookQueryRefundQueryAccountBookRefundRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookQueryRefundQueryAccountBookRefundRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
