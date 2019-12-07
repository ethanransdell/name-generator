<?php


namespace App\Services;


use App\Prefix;
use App\Suffix;

class NameService
{
    public function getName(): array
    {
        $firstPrefix = Prefix::random()->first()->value;
        $firstSuffix = Suffix::random()->first()->value;

        do {
            $lastPrefix = Prefix::random()->first()->value;
        } while ($lastPrefix === $firstPrefix);

        do {
            $lastSuffix = Suffix::random()->first()->value;
        } while ($lastSuffix === $firstSuffix);

        $firstName = $firstPrefix . $lastPrefix;
        $lastName = $lastPrefix . $lastSuffix;

        return [
            'full_name'  => "$firstName $lastName",
            'first_name' => $firstName,
            'last_name'  => $lastName
        ];
    }
}
