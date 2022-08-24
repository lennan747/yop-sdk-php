<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SubsidyBackResponse extends BaseResponse
{
    /**
     * @var SubsidyBackYopSubsidyBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackYopSubsidyBackResDTOResult';
    }

    /**
     * @param SubsidyBackYopSubsidyBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubsidyBackYopSubsidyBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
