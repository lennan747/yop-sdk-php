<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class RegisterContributeMerchantV2Request extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $businessRole;
    /**
     * @var string
     */
    private $merchantSubjectInfo;
    /**
     * @var string
     */
    private $merchantCorporationInfo;
    /**
     * @var string
     */
    private $merchantContactInfo;
    /**
     * @var string
     */
    private $industryCategoryInfo;
    /**
     * @var string
     */
    private $businessAddressInfo;
    /**
     * @var string
     */
    private $settlementAccountInfo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $productInfo;
    /**
     * @var string
     */
    private $productQualificationInfo;
    /**
     * @var string
     */
    private $functionService;
    /**
     * @var string
     */
    private $functionServiceQualificationInfo;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return RegisterContributeMerchantV2Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets businessRole
     *
     * @return string
     */
    public function getBusinessRole()
    {
        return $this->businessRole;
    }

    /**
     * Sets businessRole
     *
     * @param string $businessRole
     * @return RegisterContributeMerchantV2Request
     */
    public function setBusinessRole($businessRole)
    {
        $this->businessRole = $businessRole;
        return $this;
    }
    /**
     * Gets merchantSubjectInfo
     *
     * @return string
     */
    public function getMerchantSubjectInfo()
    {
        return $this->merchantSubjectInfo;
    }

    /**
     * Sets merchantSubjectInfo
     *
     * @param string $merchantSubjectInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setMerchantSubjectInfo($merchantSubjectInfo)
    {
        $this->merchantSubjectInfo = $merchantSubjectInfo;
        return $this;
    }
    /**
     * Gets merchantCorporationInfo
     *
     * @return string
     */
    public function getMerchantCorporationInfo()
    {
        return $this->merchantCorporationInfo;
    }

    /**
     * Sets merchantCorporationInfo
     *
     * @param string $merchantCorporationInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setMerchantCorporationInfo($merchantCorporationInfo)
    {
        $this->merchantCorporationInfo = $merchantCorporationInfo;
        return $this;
    }
    /**
     * Gets merchantContactInfo
     *
     * @return string
     */
    public function getMerchantContactInfo()
    {
        return $this->merchantContactInfo;
    }

    /**
     * Sets merchantContactInfo
     *
     * @param string $merchantContactInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setMerchantContactInfo($merchantContactInfo)
    {
        $this->merchantContactInfo = $merchantContactInfo;
        return $this;
    }
    /**
     * Gets industryCategoryInfo
     *
     * @return string
     */
    public function getIndustryCategoryInfo()
    {
        return $this->industryCategoryInfo;
    }

    /**
     * Sets industryCategoryInfo
     *
     * @param string $industryCategoryInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setIndustryCategoryInfo($industryCategoryInfo)
    {
        $this->industryCategoryInfo = $industryCategoryInfo;
        return $this;
    }
    /**
     * Gets businessAddressInfo
     *
     * @return string
     */
    public function getBusinessAddressInfo()
    {
        return $this->businessAddressInfo;
    }

    /**
     * Sets businessAddressInfo
     *
     * @param string $businessAddressInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setBusinessAddressInfo($businessAddressInfo)
    {
        $this->businessAddressInfo = $businessAddressInfo;
        return $this;
    }
    /**
     * Gets settlementAccountInfo
     *
     * @return string
     */
    public function getSettlementAccountInfo()
    {
        return $this->settlementAccountInfo;
    }

    /**
     * Sets settlementAccountInfo
     *
     * @param string $settlementAccountInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setSettlementAccountInfo($settlementAccountInfo)
    {
        $this->settlementAccountInfo = $settlementAccountInfo;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return RegisterContributeMerchantV2Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets productInfo
     *
     * @return string
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Sets productInfo
     *
     * @param string $productInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
        return $this;
    }
    /**
     * Gets productQualificationInfo
     *
     * @return string
     */
    public function getProductQualificationInfo()
    {
        return $this->productQualificationInfo;
    }

    /**
     * Sets productQualificationInfo
     *
     * @param string $productQualificationInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setProductQualificationInfo($productQualificationInfo)
    {
        $this->productQualificationInfo = $productQualificationInfo;
        return $this;
    }
    /**
     * Gets functionService
     *
     * @return string
     */
    public function getFunctionService()
    {
        return $this->functionService;
    }

    /**
     * Sets functionService
     *
     * @param string $functionService
     * @return RegisterContributeMerchantV2Request
     */
    public function setFunctionService($functionService)
    {
        $this->functionService = $functionService;
        return $this;
    }
    /**
     * Gets functionServiceQualificationInfo
     *
     * @return string
     */
    public function getFunctionServiceQualificationInfo()
    {
        return $this->functionServiceQualificationInfo;
    }

    /**
     * Sets functionServiceQualificationInfo
     *
     * @param string $functionServiceQualificationInfo
     * @return RegisterContributeMerchantV2Request
     */
    public function setFunctionServiceQualificationInfo($functionServiceQualificationInfo)
    {
        $this->functionServiceQualificationInfo = $functionServiceQualificationInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'registerContributeMerchantV2';
    }


}
