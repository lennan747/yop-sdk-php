<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MultipleAuthResponse extends BaseResponse
{
    /**
     * @var MultipleAuthAuthResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\MultipleAuthAuthResponseDTOResult';
    }

    /**
     * @param MultipleAuthAuthResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MultipleAuthAuthResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
