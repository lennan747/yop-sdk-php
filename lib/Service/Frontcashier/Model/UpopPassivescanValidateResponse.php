<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class UpopPassivescanValidateResponse extends BaseResponse
{
    /**
     * @var UpopPassivescanValidateOpenPassiveValidateResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopPassivescanValidateOpenPassiveValidateResponseDTOResult';
    }

    /**
     * @param UpopPassivescanValidateOpenPassiveValidateResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopPassivescanValidateOpenPassiveValidateResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
