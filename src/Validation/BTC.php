<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

use Merkeleon\PhpCryptocurrencyAddressValidation\Utils\Bech32Decoder;
use Merkeleon\PhpCryptocurrencyAddressValidation\Utils\Bech32Exception;
use Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

class BTC extends Validation
{
    // more info at https://en.bitcoin.it/wiki/List_of_address_prefixes
    protected $base58PrefixToHexVersion = [
        '1' => '00',
        '3' => '05'
    ];

    public function validate($address)
    {
        $valid = parent::validate($address);

        if (!$valid) {
            // maybe it's a bech32 address
            try {
                $valid = is_array($decoded = Bech32Decoder::decodeRaw($address)) && 'bc' === $decoded[0];
            } catch (Bech32Exception $exception) {}
        }

        return $valid;
    }
}