<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MigrateBankOrderResponse extends BaseResponse
{
    /**
     * @var MigrateBankOrderYopMigrateResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Reprocess\Model\MigrateBankOrderYopMigrateResDTOResult';
    }

    /**
     * @param MigrateBankOrderYopMigrateResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MigrateBankOrderYopMigrateResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
