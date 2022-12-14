<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeDividebackResponse extends BaseResponse
{
    /**
     * @var TradeDividebackYopDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeDividebackYopDivideBackResDTOResult';
    }

    /**
     * @param TradeDividebackYopDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeDividebackYopDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
