<?php

namespace Google\AdsApi\AdWords\v201705\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerSyncError extends \Google\AdsApi\AdWords\v201705\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201705\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param int $campaignId
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $campaignId = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->campaignId = $campaignId;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \Google\AdsApi\AdWords\v201705\ch\CustomerSyncError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201705\ch\CustomerSyncError
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

}
