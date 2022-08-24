<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardQueryorderResponse extends BaseResponse
{
    /**
     * @var BindcardQueryorderOpenQueryOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderOpenQueryOrderResponseDTOResult';
    }

    /**
     * @param BindcardQueryorderOpenQueryOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardQueryorderOpenQueryOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
