<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PointCreateResponse extends BaseResponse
{
    /**
     * @var PointCreateAccountCreateResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\PointCreateAccountCreateResponseDTOResult';
    }

    /**
     * @param PointCreateAccountCreateResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PointCreateAccountCreateResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
