<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RegisterContributeIndexV2Response extends BaseResponse
{
    /**
     * @var RegisterContributeIndexV2UserPreRegisterRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeIndexV2UserPreRegisterRespDtoResult';
    }

    /**
     * @param RegisterContributeIndexV2UserPreRegisterRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterContributeIndexV2UserPreRegisterRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
