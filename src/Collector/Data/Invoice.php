<?php

namespace Collector\Data;

/**
 * Class AddInvoice.
 */
class Invoice implements \JsonSerializable
{

    /**
     * @var string (optional)
     */
    protected $ClientIpAddress;

    /**
     * @var string
     */
    protected $Currency;

    /**
     * @var string (optional)
     */
    protected $OrderNo;

    /**
     * @var \Collector\Data\DateTime
     */
    protected $OrderDate;

    /**
     * @var \Collector\Data\InvoiceRow[]
     */
    protected $InvoiceRows;

    /**
     * @var int (optional)
     */
    protected $InvoiceType;

    /**
     * @var \Collector\Data\Address
     */
    protected $InvoiceAddress;

    /**
     * @var \Collector\Data\Address
     */
    protected $DeliveryAddress;

    /**
     * @var int
     */
    protected $InvoiceDeliveryMethod;

    /**
     * @var int (optional)
     *
     * Not used at the moment.
     */
    protected $CreditTime;

    /**
     * @var int (optional)
     */
    protected $ActivationOption;

    /**
     * @var string (optional)
     */
    protected $Reference;

    /**
     * @var string (optional)
     */
    protected $CostCenter;

    /**
     * @var int (optional)
     */
    protected $Gender;

    /**
     * @var string (optional)
     */
    protected $ProductCode;

    /**
     * @var int (optional)
     */
    protected $PurchaseType;

    /**
     * @var string (optional)
     */
    protected $SalesPerson;

    /**
     * @var (optional)
     *
     * Contact Collector for further information how to use it.
     */
    protected $AdditionalInformation;

    /**
     * @var string (optional)
     */
    protected $CustomerNo;

    /**
     * @var string (optional)
     */
    protected $RegNo;

    /**
     * AddInvoice constructor.
     * @param string $regNo
     * @param string $currency
     * @param \Collector\Data\DateTime $orderDate
     * @param \Collector\Data\InvoiceRow[] $invoiceRows
     * @param \Collector\Data\Address $invoiceAddress
     * @param \Collector\Data\Address $deliveryAddress
     * @param int $invoiceDeliveryMethod
     */
    public function __construct(
        $regNo,
        $currency,
        \Collector\Data\DateTime $orderDate,
        array $invoiceRows,
        \Collector\Data\Address $invoiceAddress,
        \Collector\Data\Address $deliveryAddress,
        $invoiceDeliveryMethod
    ) {
        $this->RegNo = $regNo;
        $this->Currency = $currency;
        $this->OrderDate = $orderDate;
        $this->InvoiceRows = $invoiceRows;
        $this->InvoiceAddress = $invoiceAddress;
        $this->DeliveryAddress = $deliveryAddress;
        $this->InvoiceDeliveryMethod = $invoiceDeliveryMethod;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        // Skip empty lines.
        return array_filter(get_object_vars($this));
    }

    /**
     * @param string $ClientIpAddress
     */
    public function setClientIpAddress($ClientIpAddress)
    {
        $this->ClientIpAddress = $ClientIpAddress;
    }

    /**
     * @return string
     */
    public function getClientIpAddress()
    {
        return $this->ClientIpAddress;
    }

    /**
     * @param string $Currency
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $OrderNo
     */
    public function setOrderNo($OrderNo)
    {
        $this->OrderNo = $OrderNo;
    }

    /**
     * @return string
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param \Collector\Data\DateTime $OrderDate
     */
    public function setOrderDate(\Collector\Data\DateTime $OrderDate)
    {
        $this->OrderDate = $OrderDate;
    }

    /**
     * @return \Collector\Data\DateTime
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param \Collector\Data\InvoiceRow[] $InvoiceRows
     */
    public function setInvoiceRows(array $InvoiceRows)
    {
        $this->InvoiceRows = $InvoiceRows;
    }

    /**
     * @return \Collector\Data\InvoiceRow[]
     */
    public function getInvoiceRows()
    {
        return $this->InvoiceRows;
    }

    /**
     * @param int $InvoiceType
     */
    public function setInvoiceType($InvoiceType)
    {
        $this->InvoiceType = $InvoiceType;
    }

    /**
     * @return int
     */
    public function getInvoiceType()
    {
        return $this->InvoiceType;
    }

    /**
     * @param \Collector\Data\Address $InvoiceAddress
     */
    public function setInvoiceAddress(\Collector\Data\Address $InvoiceAddress)
    {
        $this->InvoiceAddress = $InvoiceAddress;
    }

    /**
     * @return \Collector\Data\Address
     */
    public function getInvoiceAddress()
    {
        return $this->InvoiceAddress;
    }

    /**
     * @param \Collector\Data\Address $DeliveryAddress
     */
    public function setDeliveryAddress(\Collector\Data\Address $DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;
    }

    /**
     * @return \Collector\Data\Address
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param int $CreditTime
     */
    public function setCreditTime($CreditTime)
    {
        $this->CreditTime = $CreditTime;
    }

    /**
     * @return int
     */
    public function getCreditTime()
    {
        return $this->CreditTime;
    }

    /**
     * @param int $ActivationOption
     */
    public function setActivationOption($ActivationOption)
    {
        $this->ActivationOption = $ActivationOption;
    }

    /**
     * @return int
     */
    public function getActivationOption()
    {
        return $this->ActivationOption;
    }

    /**
     * @param string $Reference
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $CostCenter
     */
    public function setCostCenter($CostCenter)
    {
        $this->CostCenter = $CostCenter;
    }

    /**
     * @return string
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }

    /**
     * @param int $Gender
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param string $ProductCode
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param int $PurchaseType
     */
    public function setPurchaseType($PurchaseType)
    {
        $this->PurchaseType = $PurchaseType;
    }

    /**
     * @return int
     */
    public function getPurchaseType()
    {
        return $this->PurchaseType;
    }

    /**
     * @param string $SalesPerson
     */
    public function setSalesPerson($SalesPerson)
    {
        $this->SalesPerson = $SalesPerson;
    }

    /**
     * @return string
     */
    public function getSalesPerson()
    {
        return $this->SalesPerson;
    }

    /**
     * @param mixed $AdditionalInformation
     */
    public function setAdditionalInformation($AdditionalInformation)
    {
        $this->AdditionalInformation = $AdditionalInformation;
    }

    /**
     * @return mixed
     */
    public function getAdditionalInformation()
    {
        return $this->AdditionalInformation;
    }

    /**
     * @param string $CustomerNo
     */
    public function setCustomerNo($CustomerNo)
    {
        $this->CustomerNo = $CustomerNo;
    }

    /**
     * @return string
     */
    public function getCustomerNo()
    {
        return $this->CustomerNo;
    }

    /**
     * @param string $RegNo
     */
    public function setRegNo($RegNo)
    {
        $this->RegNo = $RegNo;
    }

    /**
     * @return string
     */
    public function getRegNo()
    {
        return $this->RegNo;
    }

    /**
     * @param int $InvoiceDeliveryMethod
     */
    public function setInvoiceDeliveryMethod($InvoiceDeliveryMethod)
    {
        $this->InvoiceDeliveryMethod = $InvoiceDeliveryMethod;
    }

    /**
     * @return int
     */
    public function getInvoiceDeliveryMethod()
    {
        return $this->InvoiceDeliveryMethod;
    }
}
