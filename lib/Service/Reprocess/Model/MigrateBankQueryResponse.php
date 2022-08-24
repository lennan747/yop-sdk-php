<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MigrateBankQueryResponse extends BaseResponse
{
    /**
     * @var MigrateBankQueryYopQueryMigrateOrderResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Reprocess\Model\MigrateBankQueryYopQueryMigrateOrderResDTOResult';
    }

    /**
     * @param MigrateBankQueryYopQueryMigrateOrderResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MigrateBankQueryYopQueryMigrateOrderResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
