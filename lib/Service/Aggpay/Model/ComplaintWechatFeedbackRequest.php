<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class ComplaintWechatFeedbackRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $complaintNo;
    /**
     * @var string
     */
    private $feedbackContent;
    /**
     * @var string
     */
    private $imageList;
    /**
     * @var string
     */
    private $feedbackType;

    /**
     * Gets complaintNo
     *
     * @return string
     */
    public function getComplaintNo()
    {
        return $this->complaintNo;
    }

    /**
     * Sets complaintNo
     *
     * @param string $complaintNo
     * @return ComplaintWechatFeedbackRequest
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }
    /**
     * Gets feedbackContent
     *
     * @return string
     */
    public function getFeedbackContent()
    {
        return $this->feedbackContent;
    }

    /**
     * Sets feedbackContent
     *
     * @param string $feedbackContent
     * @return ComplaintWechatFeedbackRequest
     */
    public function setFeedbackContent($feedbackContent)
    {
        $this->feedbackContent = $feedbackContent;
        return $this;
    }
    /**
     * Gets imageList
     *
     * @return string
     */
    public function getImageList()
    {
        return $this->imageList;
    }

    /**
     * Sets imageList
     *
     * @param string $imageList
     * @return ComplaintWechatFeedbackRequest
     */
    public function setImageList($imageList)
    {
        $this->imageList = $imageList;
        return $this;
    }
    /**
     * Gets feedbackType
     *
     * @return string
     */
    public function getFeedbackType()
    {
        return $this->feedbackType;
    }

    /**
     * Sets feedbackType
     *
     * @param string $feedbackType
     * @return ComplaintWechatFeedbackRequest
     */
    public function setFeedbackType($feedbackType)
    {
        $this->feedbackType = $feedbackType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaintWechatFeedback';
    }


}
