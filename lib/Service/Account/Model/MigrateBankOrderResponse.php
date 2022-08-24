<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MigrateBankOrderResponse extends BaseResponse
{
    /**
     * @var MigrateBankOrderMigrateBankRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankOrderMigrateBankRespDTOResult';
    }

    /**
     * @param MigrateBankOrderMigrateBankRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MigrateBankOrderMigrateBankRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
