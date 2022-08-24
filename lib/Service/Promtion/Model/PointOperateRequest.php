<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class PointOperateRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestId;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantUserNo;
    /**
     * @var string
     */
    private $pointAccountNo;
    /**
     * @var float
     */
    private $point;
    /**
     * @var string
     */
    private $payDirection;
    /**
     * @var string
     */
    private $remark;

    /**
     * Gets requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId
     *
     * @param string $requestId
     * @return PointOperateRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
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
     * @return PointOperateRequest
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
     * @return PointOperateRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantUserNo
     *
     * @return string
     */
    public function getMerchantUserNo()
    {
        return $this->merchantUserNo;
    }

    /**
     * Sets merchantUserNo
     *
     * @param string $merchantUserNo
     * @return PointOperateRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets pointAccountNo
     *
     * @return string
     */
    public function getPointAccountNo()
    {
        return $this->pointAccountNo;
    }

    /**
     * Sets pointAccountNo
     *
     * @param string $pointAccountNo
     * @return PointOperateRequest
     */
    public function setPointAccountNo($pointAccountNo)
    {
        $this->pointAccountNo = $pointAccountNo;
        return $this;
    }
    /**
     * Gets point
     *
     * @return float
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Sets point
     *
     * @param float $point
     * @return PointOperateRequest
     */
    public function setPoint($point)
    {
        $this->point = $point;
        return $this;
    }
    /**
     * Gets payDirection
     *
     * @return string
     */
    public function getPayDirection()
    {
        return $this->payDirection;
    }

    /**
     * Sets payDirection
     *
     * @param string $payDirection
     * @return PointOperateRequest
     */
    public function setPayDirection($payDirection)
    {
        $this->payDirection = $payDirection;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return PointOperateRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    public static function getOperationId()
    {
        return 'pointOperate';
    }


}
