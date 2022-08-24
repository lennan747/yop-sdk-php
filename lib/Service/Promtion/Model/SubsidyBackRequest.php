<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class SubsidyBackRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $subsidyRequestId;
    /**
     * @var string
     */
    private $subsidyBackRequestId;
    /**
     * @var string
     */
    private $subsidyBackAmount;
    /**
     * @var string
     */
    private $returnAccountType;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return SubsidyBackRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets subsidyRequestId
     *
     * @return string
     */
    public function getSubsidyRequestId()
    {
        return $this->subsidyRequestId;
    }

    /**
     * Sets subsidyRequestId
     *
     * @param string $subsidyRequestId
     * @return SubsidyBackRequest
     */
    public function setSubsidyRequestId($subsidyRequestId)
    {
        $this->subsidyRequestId = $subsidyRequestId;
        return $this;
    }
    /**
     * Gets subsidyBackRequestId
     *
     * @return string
     */
    public function getSubsidyBackRequestId()
    {
        return $this->subsidyBackRequestId;
    }

    /**
     * Sets subsidyBackRequestId
     *
     * @param string $subsidyBackRequestId
     * @return SubsidyBackRequest
     */
    public function setSubsidyBackRequestId($subsidyBackRequestId)
    {
        $this->subsidyBackRequestId = $subsidyBackRequestId;
        return $this;
    }
    /**
     * Gets subsidyBackAmount
     *
     * @return string
     */
    public function getSubsidyBackAmount()
    {
        return $this->subsidyBackAmount;
    }

    /**
     * Sets subsidyBackAmount
     *
     * @param string $subsidyBackAmount
     * @return SubsidyBackRequest
     */
    public function setSubsidyBackAmount($subsidyBackAmount)
    {
        $this->subsidyBackAmount = $subsidyBackAmount;
        return $this;
    }
    /**
     * Gets returnAccountType
     *
     * @return string
     */
    public function getReturnAccountType()
    {
        return $this->returnAccountType;
    }

    /**
     * Sets returnAccountType
     *
     * @param string $returnAccountType
     * @return SubsidyBackRequest
     */
    public function setReturnAccountType($returnAccountType)
    {
        $this->returnAccountType = $returnAccountType;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return SubsidyBackRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return SubsidyBackRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
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
     * @return SubsidyBackRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'subsidyBack';
    }


}
