<?php

/**
 * Class Customer model
 *
 * @package  JorttConnector
 * @author   Joris Ros <joris.ros@gmail.com>
 * @license  GPL <GNU General Public License, version 3>
 */

namespace JorttConnector\Model;


class Customer
{
    const PAYMENT_METHOD_INVOICE_AFTER_PAY = 'after_pay';

    /** @var int */
    private $id = null;

    /** @var string */
    private $organizationId = null;

    /** @var int */
    private $sequenceNumber = null;

    /** @var string */
    private $ledgerAccountId = null;

    /** @var string */
    private $shiftVat = null;

    /** @var string */
    private $financeCompanyName = null;

    /** @var string */
    private $financeAddressStreet = null;

    /** @var string */
    private $financeAddressCity = null;

    /** @var string */
    private $financeAddressPostalCode = null;

    /** @var string */
    private $financeAddressCountryCode = null;

    /** @var string */
    private $financeAddressCountryName = null;

    /** @var string */
    private $financeAttn = null;

    /** @var string */
    private $financeEmail = null;

    /** @var array */
    private $financeCcEmails = [];

    /** @var string */
    private $financeExtraInformation = null;

    /** @var string */
    private $vatNumber = null;

    /** @var int */
    private $paymentTerm = null;

    /** @var bool */
    private $deleted = null;

    /** @var string */
    private $additionalInformation;

    /** @var string */
    private $phonenumber;

    /** @var string */
    private $cocNumber;

    /** @var string */
    private $website;

    /** @var string */
    private $reference;

    /** @var string */
    private $invoiceLanguage;

    /** @var string */
    private $mollieDirectDebitStatus;

    /** @var string */
    private $mollieCustomerId;

    /** @var string */
    private $mollieDirectDebitDetails;

    /** @var string */
    private $mollieDirectDebitPaymentMethod;

    /** @var string */
    private $mollieMandateId;

    /** @var string */
    private $mergedIntoId;

    /** @var string */
    private $paymentMethodInvoice;

    /** @var \DateTime */
    private $createdAt;

    /** @var \DateTime */
    private $updatedAt;

    /** @var bool */
    private $isPrivate;

    /** @var string */
    private $salutation;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $initials;

    /** @var string */
    private $emailSalutation;

    /** @var \DateTime */
    private $dateOfBirth;

    /** @var string */
    private $citizenServiceNumber;

    /** @var string */
    private $customerId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
     * @param string $organizationId
     */
    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    /**
     * @return int
     */
    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    /**
     * @param int $sequenceNumber
     */
    public function setSequenceNumber(int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * @return string
     */
    public function getLedgerAccountId(): string
    {
        return $this->ledgerAccountId;
    }

    /**
     * @param string $ledgerAccountId
     */
    public function setLedgerAccountId(string $ledgerAccountId): void
    {
        $this->ledgerAccountId = $ledgerAccountId;
    }

    /**
     * @return string
     */
    public function getShiftVat(): string
    {
        return $this->shiftVat;
    }

    /**
     * @param string $shiftVat
     */
    public function setShiftVat(string $shiftVat): void
    {
        $this->shiftVat = $shiftVat;
    }

    /**
     * @return string
     */
    public function getFinanceCompanyName(): string
    {
        return $this->financeCompanyName;
    }

    /**
     * @param string $financeCompanyName
     */
    public function setFinanceCompanyName(string $financeCompanyName): void
    {
        $this->financeCompanyName = $financeCompanyName;
    }

    /**
     * @return string
     */
    public function getFinanceAddressStreet(): string
    {
        return $this->financeAddressStreet;
    }

    /**
     * @param string $financeAddressStreet
     */
    public function setFinanceAddressStreet(string $financeAddressStreet): void
    {
        $this->financeAddressStreet = $financeAddressStreet;
    }

    /**
     * @return string
     */
    public function getFinanceAddressCity(): string
    {
        return $this->financeAddressCity;
    }

    /**
     * @param string $financeAddressCity
     */
    public function setFinanceAddressCity(string $financeAddressCity): void
    {
        $this->financeAddressCity = $financeAddressCity;
    }

    /**
     * @return string
     */
    public function getFinanceAddressPostalCode(): string
    {
        return $this->financeAddressPostalCode;
    }

    /**
     * @param string $financeAddressPostalCode
     */
    public function setFinanceAddressPostalCode(string $financeAddressPostalCode): void
    {
        $this->financeAddressPostalCode = $financeAddressPostalCode;
    }

    /**
     * @return string
     */
    public function getFinanceAddressCountryCode(): string
    {
        return $this->financeAddressCountryCode;
    }

    /**
     * @param string $financeAddressCountryCode
     */
    public function setFinanceAddressCountryCode(string $financeAddressCountryCode): void
    {
        $this->financeAddressCountryCode = $financeAddressCountryCode;
    }

    /**
     * @return string
     */
    public function getFinanceAddressCountryName(): string
    {
        return $this->financeAddressCountryName;
    }

    /**
     * @param string $financeAddressCountryName
     */
    public function setFinanceAddressCountryName(string $financeAddressCountryName): void
    {
        $this->financeAddressCountryName = $financeAddressCountryName;
    }

    /**
     * @return string
     */
    public function getFinanceAttn(): string
    {
        return $this->financeAttn;
    }

    /**
     * @param string $financeAttn
     */
    public function setFinanceAttn(string $financeAttn): void
    {
        $this->financeAttn = $financeAttn;
    }

    /**
     * @return string
     */
    public function getFinanceEmail(): string
    {
        return $this->financeEmail;
    }

    /**
     * @param string $financeEmail
     */
    public function setFinanceEmail(string $financeEmail): void
    {
        $this->financeEmail = $financeEmail;
    }

    /**
     * @return array
     */
    public function getFinanceCcEmails(): array
    {
        return $this->financeCcEmails;
    }

    /**
     * @param array $financeCcEmails
     */
    public function setFinanceCcEmails(array $financeCcEmails): void
    {
        $this->financeCcEmails = $financeCcEmails;
    }

    /**
     * @return string
     */
    public function getFinanceExtraInformation(): string
    {
        return $this->financeExtraInformation;
    }

    /**
     * @param string $financeExtraInformation
     */
    public function setFinanceExtraInformation(string $financeExtraInformation): void
    {
        $this->financeExtraInformation = $financeExtraInformation;
    }

    /**
     * @return string
     */
    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     */
    public function setVatNumber(string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return int
     */
    public function getPaymentTerm(): int
    {
        return $this->paymentTerm;
    }

    /**
     * @param int $paymentTerm
     */
    public function setPaymentTerm(int $paymentTerm): void
    {
        $this->paymentTerm = $paymentTerm;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted(bool $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * @return string
     */
    public function getAdditionalInformation(): string
    {
        return $this->additionalInformation;
    }

    /**
     * @param string $additionalInformation
     */
    public function setAdditionalInformation(string $additionalInformation): void
    {
        $this->additionalInformation = $additionalInformation;
    }

    /**
     * @return string
     */
    public function getPhonenumber(): string
    {
        return $this->phonenumber;
    }

    /**
     * @param string $phonenumber
     */
    public function setPhonenumber(string $phonenumber): void
    {
        $this->phonenumber = $phonenumber;
    }

    /**
     * @return string
     */
    public function getCocNumber(): string
    {
        return $this->cocNumber;
    }

    /**
     * @param string $cocNumber
     */
    public function setCocNumber(string $cocNumber): void
    {
        $this->cocNumber = $cocNumber;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getInvoiceLanguage(): string
    {
        return $this->invoiceLanguage;
    }

    /**
     * @param string $invoiceLanguage
     */
    public function setInvoiceLanguage(string $invoiceLanguage): void
    {
        $this->invoiceLanguage = $invoiceLanguage;
    }

    /**
     * @return string
     */
    public function getMollieDirectDebitStatus(): string
    {
        return $this->mollieDirectDebitStatus;
    }

    /**
     * @param string $mollieDirectDebitStatus
     */
    public function setMollieDirectDebitStatus(string $mollieDirectDebitStatus): void
    {
        $this->mollieDirectDebitStatus = $mollieDirectDebitStatus;
    }

    /**
     * @return string
     */
    public function getMollieCustomerId(): string
    {
        return $this->mollieCustomerId;
    }

    /**
     * @param string $mollieCustomerId
     */
    public function setMollieCustomerId(string $mollieCustomerId): void
    {
        $this->mollieCustomerId = $mollieCustomerId;
    }

    /**
     * @return string
     */
    public function getMollieDirectDebitDetails(): string
    {
        return $this->mollieDirectDebitDetails;
    }

    /**
     * @param string $mollieDirectDebitDetails
     */
    public function setMollieDirectDebitDetails(string $mollieDirectDebitDetails): void
    {
        $this->mollieDirectDebitDetails = $mollieDirectDebitDetails;
    }

    /**
     * @return string
     */
    public function getMollieDirectDebitPaymentMethod(): string
    {
        return $this->mollieDirectDebitPaymentMethod;
    }

    /**
     * @param string $mollieDirectDebitPaymentMethod
     */
    public function setMollieDirectDebitPaymentMethod(string $mollieDirectDebitPaymentMethod): void
    {
        $this->mollieDirectDebitPaymentMethod = $mollieDirectDebitPaymentMethod;
    }

    /**
     * @return string
     */
    public function getMollieMandateId(): string
    {
        return $this->mollieMandateId;
    }

    /**
     * @param string $mollieMandateId
     */
    public function setMollieMandateId(string $mollieMandateId): void
    {
        $this->mollieMandateId = $mollieMandateId;
    }

    /**
     * @return string
     */
    public function getMergedIntoId(): string
    {
        return $this->mergedIntoId;
    }

    /**
     * @param string $mergedIntoId
     */
    public function setMergedIntoId(string $mergedIntoId): void
    {
        $this->mergedIntoId = $mergedIntoId;
    }

    /**
     * @return string
     */
    public function getPaymentMethodInvoice(): string
    {
        return $this->paymentMethodInvoice;
    }

    /**
     * @param string $paymentMethodInvoice
     */
    public function setPaymentMethodInvoice(string $paymentMethodInvoice): void
    {
        $this->paymentMethodInvoice = $paymentMethodInvoice;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * @param bool $isPrivate
     */
    public function setIsPrivate(bool $isPrivate): void
    {
        $this->isPrivate = $isPrivate;
    }

    /**
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }

    /**
     * @param string $salutation
     */
    public function setSalutation(string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getInitials(): string
    {
        return $this->initials;
    }

    /**
     * @param string $initials
     */
    public function setInitials(string $initials): void
    {
        $this->initials = $initials;
    }

    /**
     * @return string
     */
    public function getEmailSalutation(): string
    {
        return $this->emailSalutation;
    }

    /**
     * @param string $emailSalutation
     */
    public function setEmailSalutation(string $emailSalutation): void
    {
        $this->emailSalutation = $emailSalutation;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth(): \DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth(\DateTime $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getCitizenServiceNumber(): string
    {
        return $this->citizenServiceNumber;
    }

    /**
     * @param string $citizenServiceNumber
     */
    public function setCitizenServiceNumber(string $citizenServiceNumber): void
    {
        $this->citizenServiceNumber = $citizenServiceNumber;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     */
    public function setCustomerId(string $customerId): void
    {
        $this->customerId = $customerId;
    }
}
