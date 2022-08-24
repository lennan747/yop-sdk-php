<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BindcardQueryorderinfoRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $nopOrderId;

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return BindcardQueryorderinfoRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return BindcardQueryorderinfoRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets nopOrderId
     *
     * @return string
     */
    public function getNopOrderId()
    {
        return $this->nopOrderId;
    }

    /**
     * Sets nopOrderId
     *
     * @param string $nopOrderId
     * @return BindcardQueryorderinfoRequest
     */
    public function setNopOrderId($nopOrderId)
    {
        $this->nopOrderId = $nopOrderId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardQueryorderinfo';
    }


}
