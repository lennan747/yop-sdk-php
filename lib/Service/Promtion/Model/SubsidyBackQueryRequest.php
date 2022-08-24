<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class SubsidyBackQueryRequest extends BaseRequest
{
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
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

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
     * @return SubsidyBackQueryRequest
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
     * @return SubsidyBackQueryRequest
     */
    public function setSubsidyBackRequestId($subsidyBackRequestId)
    {
        $this->subsidyBackRequestId = $subsidyBackRequestId;
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
     * @return SubsidyBackQueryRequest
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
     * @return SubsidyBackQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'subsidyBackQuery';
    }


}
