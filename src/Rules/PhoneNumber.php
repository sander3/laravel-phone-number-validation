<?php

namespace Soved\Laravel\Validation\PhoneNumber\Rules;

use Brick\PhoneNumber\PhoneNumber as Validator;
use Brick\PhoneNumber\PhoneNumberParseException;

class PhoneNumber
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  array  $parameters
     * @param  \Illuminate\Validation\Validator  $validator
     * @return bool
     */
    public function __invoke(
        $attribute,
        $value,
        $parameters,
        $validator
    ) {
        try {
            $phoneNumber = Validator::parse($value);
        } catch (PhoneNumberParseException $e) {
            return false;
        }

        return $phoneNumber->isValidNumber();
    }
}
