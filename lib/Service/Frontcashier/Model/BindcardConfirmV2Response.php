<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardConfirmV2Response extends BaseResponse
{
    /**
     * @var BindcardConfirmV2OpenAuthBindCardConfirmResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmV2OpenAuthBindCardConfirmResponseDTOResult';
    }

    /**
     * @param BindcardConfirmV2OpenAuthBindCardConfirmResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardConfirmV2OpenAuthBindCardConfirmResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
