<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class DividebackQueryResponse extends BaseResponse
{
    /**
     * @var DividebackQueryYopQueryDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DividebackQueryYopQueryDivideBackResDTOResult';
    }

    /**
     * @param DividebackQueryYopQueryDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DividebackQueryYopQueryDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
