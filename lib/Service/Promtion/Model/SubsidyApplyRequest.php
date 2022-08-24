<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class SubsidyApplyRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $subsidyRequestId;
    /**
     * @var string
     */
    private $subsidyAmount;
    /**
     * @var string
     */
    private $assumeMerchantNo;
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
     * @return SubsidyApplyRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return SubsidyApplyRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
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
     * @return SubsidyApplyRequest
     */
    public function setSubsidyRequestId($subsidyRequestId)
    {
        $this->subsidyRequestId = $subsidyRequestId;
        return $this;
    }
    /**
     * Gets subsidyAmount
     *
     * @return string
     */
    public function getSubsidyAmount()
    {
        return $this->subsidyAmount;
    }

    /**
     * Sets subsidyAmount
     *
     * @param string $subsidyAmount
     * @return SubsidyApplyRequest
     */
    public function setSubsidyAmount($subsidyAmount)
    {
        $this->subsidyAmount = $subsidyAmount;
        return $this;
    }
    /**
     * Gets assumeMerchantNo
     *
     * @return string
     */
    public function getAssumeMerchantNo()
    {
        return $this->assumeMerchantNo;
    }

    /**
     * Sets assumeMerchantNo
     *
     * @param string $assumeMerchantNo
     * @return SubsidyApplyRequest
     */
    public function setAssumeMerchantNo($assumeMerchantNo)
    {
        $this->assumeMerchantNo = $assumeMerchantNo;
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
     * @return SubsidyApplyRequest
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
     * @return SubsidyApplyRequest
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
     * @return SubsidyApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'subsidyApply';
    }


}
