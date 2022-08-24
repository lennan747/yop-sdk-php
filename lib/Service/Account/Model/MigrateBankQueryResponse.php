<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MigrateBankQueryResponse extends BaseResponse
{
    /**
     * @var MigrateBankQueryMigrateBankQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankQueryMigrateBankQueryRespDTOResult';
    }

    /**
     * @param MigrateBankQueryMigrateBankQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MigrateBankQueryMigrateBankQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
