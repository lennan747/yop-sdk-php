<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class YjzfPaymentconfirmResponse extends BaseResponse
{
    /**
     * @var YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult';
    }

    /**
     * @param YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
