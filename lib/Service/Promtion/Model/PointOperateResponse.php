<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PointOperateResponse extends BaseResponse
{
    /**
     * @var PointOperatePointAccountOperateResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\PointOperatePointAccountOperateResponseDTOResult';
    }

    /**
     * @param PointOperatePointAccountOperateResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PointOperatePointAccountOperateResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
