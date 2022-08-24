<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindpaySendsmsResponse extends BaseResponse
{
    /**
     * @var BindpaySendsmsApiBindPaySendSmsResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpaySendsmsApiBindPaySendSmsResponseDTOResult';
    }

    /**
     * @param BindpaySendsmsApiBindPaySendSmsResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindpaySendsmsApiBindPaySendSmsResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
