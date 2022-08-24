<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardConfirmResponse extends BaseResponse
{
    /**
     * @var BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult';
    }

    /**
     * @param BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
