<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardPayerrequestResponse extends BaseResponse
{
    /**
     * @var BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult';
    }

    /**
     * @param BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
