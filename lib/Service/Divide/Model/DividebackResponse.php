<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class DividebackResponse extends BaseResponse
{
    /**
     * @var DividebackYopDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DividebackYopDivideBackResDTOResult';
    }

    /**
     * @param DividebackYopDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DividebackYopDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
