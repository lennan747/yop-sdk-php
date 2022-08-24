<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxySendLogonSmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxySendLogonSmscodeBaseResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendLogonSmscodeBaseResponseResult';
    }

    /**
     * @param FacepayProxySendLogonSmscodeBaseResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxySendLogonSmscodeBaseResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
