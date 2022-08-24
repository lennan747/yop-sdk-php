<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BankAccountOpenRequest extends BaseRequest
{
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
    private $businessPlacePhoto;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $deviceip;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $merchantSubjectInfo;
    /**
     * @var string
     */
    private $settlementAccountInfo;
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
    private $shareholdersInfo;
    /**
     * @var string
     */
    private $beneficiaryInfo;
    /**
     * @var string
     */
    private $requestNo;

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
     * @return BankAccountOpenRequest
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
     * @return BankAccountOpenRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets businessPlacePhoto
     *
     * @return string
     */
    public function getBusinessPlacePhoto()
    {
        return $this->businessPlacePhoto;
    }

    /**
     * Sets businessPlacePhoto
     *
     * @param string $businessPlacePhoto
     * @return BankAccountOpenRequest
     */
    public function setBusinessPlacePhoto($businessPlacePhoto)
    {
        $this->businessPlacePhoto = $businessPlacePhoto;
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
     * @return BankAccountOpenRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets deviceip
     *
     * @return string
     */
    public function getDeviceip()
    {
        return $this->deviceip;
    }

    /**
     * Sets deviceip
     *
     * @param string $deviceip
     * @return BankAccountOpenRequest
     */
    public function setDeviceip($deviceip)
    {
        $this->deviceip = $deviceip;
        return $this;
    }
    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token
     *
     * @param string $token
     * @return BankAccountOpenRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
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
     * @return BankAccountOpenRequest
     */
    public function setMerchantSubjectInfo($merchantSubjectInfo)
    {
        $this->merchantSubjectInfo = $merchantSubjectInfo;
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
     * @return BankAccountOpenRequest
     */
    public function setSettlementAccountInfo($settlementAccountInfo)
    {
        $this->settlementAccountInfo = $settlementAccountInfo;
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
     * @return BankAccountOpenRequest
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
     * @return BankAccountOpenRequest
     */
    public function setMerchantContactInfo($merchantContactInfo)
    {
        $this->merchantContactInfo = $merchantContactInfo;
        return $this;
    }
    /**
     * Gets shareholdersInfo
     *
     * @return string
     */
    public function getShareholdersInfo()
    {
        return $this->shareholdersInfo;
    }

    /**
     * Sets shareholdersInfo
     *
     * @param string $shareholdersInfo
     * @return BankAccountOpenRequest
     */
    public function setShareholdersInfo($shareholdersInfo)
    {
        $this->shareholdersInfo = $shareholdersInfo;
        return $this;
    }
    /**
     * Gets beneficiaryInfo
     *
     * @return string
     */
    public function getBeneficiaryInfo()
    {
        return $this->beneficiaryInfo;
    }

    /**
     * Sets beneficiaryInfo
     *
     * @param string $beneficiaryInfo
     * @return BankAccountOpenRequest
     */
    public function setBeneficiaryInfo($beneficiaryInfo)
    {
        $this->beneficiaryInfo = $beneficiaryInfo;
        return $this;
    }
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
     * @return BankAccountOpenRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bankAccountOpen';
    }


}
