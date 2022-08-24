<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class QualificationSupplementaryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $registAddress;
    /**
     * @var string
     */
    private $manageSection;
    /**
     * @var string
     */
    private $corporationFrontUrl;
    /**
     * @var string
     */
    private $corporationBackUrl;
    /**
     * @var string
     */
    private $corporationExpiryDate;
    /**
     * @var string
     */
    private $qualificationUrl;
    /**
     * @var string
     */
    private $qualificationExpiryDate;

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
     * @return QualificationSupplementaryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return QualificationSupplementaryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets registAddress
     *
     * @return string
     */
    public function getRegistAddress()
    {
        return $this->registAddress;
    }

    /**
     * Sets registAddress
     *
     * @param string $registAddress
     * @return QualificationSupplementaryRequest
     */
    public function setRegistAddress($registAddress)
    {
        $this->registAddress = $registAddress;
        return $this;
    }
    /**
     * Gets manageSection
     *
     * @return string
     */
    public function getManageSection()
    {
        return $this->manageSection;
    }

    /**
     * Sets manageSection
     *
     * @param string $manageSection
     * @return QualificationSupplementaryRequest
     */
    public function setManageSection($manageSection)
    {
        $this->manageSection = $manageSection;
        return $this;
    }
    /**
     * Gets corporationFrontUrl
     *
     * @return string
     */
    public function getCorporationFrontUrl()
    {
        return $this->corporationFrontUrl;
    }

    /**
     * Sets corporationFrontUrl
     *
     * @param string $corporationFrontUrl
     * @return QualificationSupplementaryRequest
     */
    public function setCorporationFrontUrl($corporationFrontUrl)
    {
        $this->corporationFrontUrl = $corporationFrontUrl;
        return $this;
    }
    /**
     * Gets corporationBackUrl
     *
     * @return string
     */
    public function getCorporationBackUrl()
    {
        return $this->corporationBackUrl;
    }

    /**
     * Sets corporationBackUrl
     *
     * @param string $corporationBackUrl
     * @return QualificationSupplementaryRequest
     */
    public function setCorporationBackUrl($corporationBackUrl)
    {
        $this->corporationBackUrl = $corporationBackUrl;
        return $this;
    }
    /**
     * Gets corporationExpiryDate
     *
     * @return string
     */
    public function getCorporationExpiryDate()
    {
        return $this->corporationExpiryDate;
    }

    /**
     * Sets corporationExpiryDate
     *
     * @param string $corporationExpiryDate
     * @return QualificationSupplementaryRequest
     */
    public function setCorporationExpiryDate($corporationExpiryDate)
    {
        $this->corporationExpiryDate = $corporationExpiryDate;
        return $this;
    }
    /**
     * Gets qualificationUrl
     *
     * @return string
     */
    public function getQualificationUrl()
    {
        return $this->qualificationUrl;
    }

    /**
     * Sets qualificationUrl
     *
     * @param string $qualificationUrl
     * @return QualificationSupplementaryRequest
     */
    public function setQualificationUrl($qualificationUrl)
    {
        $this->qualificationUrl = $qualificationUrl;
        return $this;
    }
    /**
     * Gets qualificationExpiryDate
     *
     * @return string
     */
    public function getQualificationExpiryDate()
    {
        return $this->qualificationExpiryDate;
    }

    /**
     * Sets qualificationExpiryDate
     *
     * @param string $qualificationExpiryDate
     * @return QualificationSupplementaryRequest
     */
    public function setQualificationExpiryDate($qualificationExpiryDate)
    {
        $this->qualificationExpiryDate = $qualificationExpiryDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'qualificationSupplementary';
    }


}
