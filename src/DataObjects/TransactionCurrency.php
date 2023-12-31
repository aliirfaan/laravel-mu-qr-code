<?php

namespace aliirfaan\LaravelMuQrCode\DataObjects;

use aliirfaan\LaravelMuQrCode\Contracts\DataObjectContract;

/**
 * TransactionCurrency
 */
class TransactionCurrency extends DataObjectContract
{
    public function __construct()
    {
        $this->id = '53';
        $this->systemName = 'transaction_currency';
        $this->value = '480'; // MUR is represented by the value "480"

        $this->validationRules = [
            'value' => [
                'required',
                'numeric',
                'digits:3'
            ]
        ];
    }
}
