<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Request for creating a new customer
 */
class CreateCustomerRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $document;

    /**
     * @var string
     */
    private $type;

    /**
     * @var CreateAddressRequest
     */
    private $address;

    /**
     * @var array<string,string>
     */
    private $metadata;

    /**
     * @var CreatePhonesRequest
     */
    private $phones;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var string|null
     */
    private $documentType;

    /**
     * @param string $name
     * @param string $email
     * @param CreateAddressRequest $address
     * @param array<string,string> $metadata
     * @param CreatePhonesRequest $phones
     * @param string $code
     */
    public function __construct(
        string $name,
        string $email,
    ) {
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Returns Name.
     * Name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Email.
     * Email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * Email
     *
     * @required
     * @maps email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Document.
     * Document number. Only numbers, no special characters.
     */
    public function getDocument(): string
    {
        return $this->document;
    }

    /**
     * Sets Document.
     * Document number. Only numbers, no special characters.
     *
     * @required
     * @maps document
     */
    public function setDocument(string $document): void
    {
        $this->document = $document;
    }

    /**
     * Returns Type.
     * Person type. Can be either 'individual' or 'company'
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Person type. Can be either 'individual' or 'company'
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Address.
     * The customer's address
     */
    public function getAddress(): CreateAddressRequest
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * The customer's address
     *
     * @required
     * @maps address
     */
    public function setAddress(CreateAddressRequest $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Metadata.
     * Metadata
     *
     * @return array<string,string>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Metadata
     *
     * @required
     * @maps metadata
     *
     * @param array<string,string> $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Phones.
     */
    public function getPhones(): CreatePhonesRequest
    {
        return $this->phones;
    }

    /**
     * Sets Phones.
     *
     * @required
     * @maps phones
     */
    public function setPhones(CreatePhonesRequest $phones): void
    {
        $this->phones = $phones;
    }

    /**
     * Returns Code.
     * Customer code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Customer code
     *
     * @required
     * @maps code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Gender.
     * Customer Gender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     * Customer Gender
     *
     * @maps gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * Returns Document Type.
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    /**
     * Sets Document Type.
     *
     * @maps document_type
     */
    public function setDocumentType(?string $documentType): void
    {
        $this->documentType = $documentType;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['name']              = $this->name;
        $json['email']             = $this->email;
        if (isset($this->gender)) {
            $json['gender']        = $this->gender;
        }
        if (isset($this->document)) {
            $json['document']        = $this->document;
        }
        if (isset($this->type)) {
            $json['type']        = $this->type;
        }
        if (isset($this->address)) {
            $json['address']        = $this->address;
        }
        if (isset($this->metadata)) {
            $json['metadata']        = $this->metadata;
        }
        if (isset($this->phones)) {
            $json['phones']        = $this->phones;
        }
        if (isset($this->code)) {
            $json['code']        = $this->code;
        }
        if (isset($this->documentType)) {
            $json['document_type'] = $this->documentType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
