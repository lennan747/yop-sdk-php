<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PointQueryResponse extends BaseResponse
{
    /**
     * @var PointQueryPointAccountQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\PointQueryPointAccountQueryResponseDTOResult';
    }

    /**
     * @param PointQueryPointAccountQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PointQueryPointAccountQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
