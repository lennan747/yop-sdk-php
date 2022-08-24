<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FastbindcardRequestResponse extends BaseResponse
{
    /**
     * @var FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult';
    }

    /**
     * @param FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
