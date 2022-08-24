<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CertOrderResponse extends BaseResponse
{
    /**
     * @var CertOrderAuthResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\CertOrderAuthResponseDTOResult';
    }

    /**
     * @param CertOrderAuthResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CertOrderAuthResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
