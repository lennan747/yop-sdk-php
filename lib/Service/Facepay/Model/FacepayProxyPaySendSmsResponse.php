<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyPaySendSmsResponse extends BaseResponse
{
    /**
     * @var FacepayProxyPaySendSmsBaseUserResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyPaySendSmsBaseUserResponseResult';
    }

    /**
     * @param FacepayProxyPaySendSmsBaseUserResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyPaySendSmsBaseUserResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
