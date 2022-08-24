<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyCheckLogonSmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxyCheckLogonSmscodeBaseUserResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCheckLogonSmscodeBaseUserResponseResult';
    }

    /**
     * @param FacepayProxyCheckLogonSmscodeBaseUserResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyCheckLogonSmscodeBaseUserResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
