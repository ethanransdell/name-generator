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

        $firstName = $firstPrefix . $firstSuffix;
        $lastName = $lastPrefix . $lastSuffix;

        return [
            'full_name'  => "$firstName $lastName",
            'first_name' => $firstName,
            'last_name'  => $lastName
        ];
    }

    public function getMaxCombinations(): int
    {
        $prefixCount = Prefix::count();
        $suffixCount = Suffix::count();

        return pow($prefixCount, 2) * pow($suffixCount, 2);
    }
}
