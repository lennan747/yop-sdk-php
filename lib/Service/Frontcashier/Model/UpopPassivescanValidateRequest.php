<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class UpopPassivescanValidateRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $payOrderNo;

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
     * @return UpopPassivescanValidateRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets payOrderNo
     *
     * @return string
     */
    public function getPayOrderNo()
    {
        return $this->payOrderNo;
    }

    /**
     * Sets payOrderNo
     *
     * @param string $payOrderNo
     * @return UpopPassivescanValidateRequest
     */
    public function setPayOrderNo($payOrderNo)
    {
        $this->payOrderNo = $payOrderNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upopPassivescanValidate';
    }


}
