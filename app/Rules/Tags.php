<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Tags implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        // check if tags are no more than 3
        // throw an error on the form 
        $tags = explode(',', $value);
        if (count($tags) > 3) {
            $fail('No more than 3 tags.');
        }

        foreach ($tags as $tag) {
            if (strlen($tag) > 10 || strlen($tag) < 2) {
                $fail('Tags must be less than 10 and greater than 2 characters long.');
            }
        }
    }
}
