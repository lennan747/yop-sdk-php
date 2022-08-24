<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SupplierPayOrderResponse extends BaseResponse
{
    /**
     * @var SupplierPayOrderRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierPayOrderRemitRespDTOResult';
    }

    /**
     * @param SupplierPayOrderRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierPayOrderRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
