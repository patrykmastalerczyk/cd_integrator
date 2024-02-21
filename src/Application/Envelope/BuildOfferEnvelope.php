<?php

namespace App\Application\Envelope;

use App\Entity\Offer;

class BuildOfferEnvelope implements EnvelopeInterface
{
    public $offerId;

    public function __construct(int $offerId)
    {
        $this->offerId = $offerId;
    }
}