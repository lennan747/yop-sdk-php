<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class DivideQueryResponse extends BaseResponse
{
    /**
     * @var DivideQueryYopQueryOrderDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DivideQueryYopQueryOrderDivideResDTOResult';
    }

    /**
     * @param DivideQueryYopQueryOrderDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DivideQueryYopQueryOrderDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
