<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class RechargeAccountBookQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $ypAccountBookNo;
    /**
     * @var string
     */
    private $queryStartDate;
    /**
     * @var string
     */
    private $queryEndDate;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var int
     */
    private $pageNo;
    /**
     * @var int
     */
    private $pageSize;

    /**
     * Gets ypAccountBookNo
     *
     * @return string
     */
    public function getYpAccountBookNo()
    {
        return $this->ypAccountBookNo;
    }

    /**
     * Sets ypAccountBookNo
     *
     * @param string $ypAccountBookNo
     * @return RechargeAccountBookQueryRequest
     */
    public function setYpAccountBookNo($ypAccountBookNo)
    {
        $this->ypAccountBookNo = $ypAccountBookNo;
        return $this;
    }
    /**
     * Gets queryStartDate
     *
     * @return string
     */
    public function getQueryStartDate()
    {
        return $this->queryStartDate;
    }

    /**
     * Sets queryStartDate
     *
     * @param string $queryStartDate
     * @return RechargeAccountBookQueryRequest
     */
    public function setQueryStartDate($queryStartDate)
    {
        $this->queryStartDate = $queryStartDate;
        return $this;
    }
    /**
     * Gets queryEndDate
     *
     * @return string
     */
    public function getQueryEndDate()
    {
        return $this->queryEndDate;
    }

    /**
     * Sets queryEndDate
     *
     * @param string $queryEndDate
     * @return RechargeAccountBookQueryRequest
     */
    public function setQueryEndDate($queryEndDate)
    {
        $this->queryEndDate = $queryEndDate;
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
     * @return RechargeAccountBookQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return RechargeAccountBookQueryRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets pageNo
     *
     * @return int
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * Sets pageNo
     *
     * @param int $pageNo
     * @return RechargeAccountBookQueryRequest
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }
    /**
     * Gets pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets pageSize
     *
     * @param int $pageSize
     * @return RechargeAccountBookQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public static function getOperationId()
    {
        return 'rechargeAccountBookQuery';
    }


}
