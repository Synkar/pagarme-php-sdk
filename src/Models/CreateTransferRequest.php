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
 * Request for creating a transfer
 */
class CreateTransferRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var array
     */
    private $metadata;

    /**
     * @param int $amount
     * @param array $metadata
     */
    public function __construct(int $amount, array $metadata)
    {
        $this->amount = $amount;
        $this->metadata = $metadata;
    }

    /**
     * Returns Amount.
     *
     * Transfer amount
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * Transfer amount
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Metadata.
     *
     * Metadata
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * Metadata
     *
     * @required
     * @maps metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return mixed
     */
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['amount']   = $this->amount;
        $json['metadata'] = $this->metadata;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}