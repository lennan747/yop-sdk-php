<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RegisterContributeMicroV2Response extends BaseResponse
{
    /**
     * @var RegisterContributeMicroV2ContributeMicroMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMicroV2ContributeMicroMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterContributeMicroV2ContributeMicroMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterContributeMicroV2ContributeMicroMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
