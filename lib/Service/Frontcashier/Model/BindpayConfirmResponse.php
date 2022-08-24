<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindpayConfirmResponse extends BaseResponse
{
    /**
     * @var BindpayConfirmApiBindPayConfirmResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayConfirmApiBindPayConfirmResponseDTOResult';
    }

    /**
     * @param BindpayConfirmApiBindPayConfirmResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindpayConfirmApiBindPayConfirmResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
