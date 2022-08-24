<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AuthStateQueryV2Response extends BaseResponse
{
    /**
     * @var AuthStateQueryV2IdentityAuthStateResDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV2IdentityAuthStateResDtoResult';
    }

    /**
     * @param AuthStateQueryV2IdentityAuthStateResDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthStateQueryV2IdentityAuthStateResDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
