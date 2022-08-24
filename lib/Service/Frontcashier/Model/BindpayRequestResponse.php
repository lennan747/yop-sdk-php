<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindpayRequestResponse extends BaseResponse
{
    /**
     * @var BindpayRequestApiBindPayPaymentResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayRequestApiBindPayPaymentResponseDTOResult';
    }

    /**
     * @param BindpayRequestApiBindPayPaymentResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindpayRequestApiBindPayPaymentResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
