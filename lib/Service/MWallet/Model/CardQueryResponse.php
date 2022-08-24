<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CardQueryResponse extends BaseResponse
{
    /**
     * @var CardQueryRequestURLResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\CardQueryRequestURLResponseDTOResult';
    }

    /**
     * @param CardQueryRequestURLResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CardQueryRequestURLResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
