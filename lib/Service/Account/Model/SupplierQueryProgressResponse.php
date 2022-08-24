<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SupplierQueryProgressResponse extends BaseResponse
{
    /**
     * @var SupplierQueryProgressApplySupplierProgressRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryProgressApplySupplierProgressRespDTOResult';
    }

    /**
     * @param SupplierQueryProgressApplySupplierProgressRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierQueryProgressApplySupplierProgressRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
