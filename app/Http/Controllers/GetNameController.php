<?php


namespace App\Http\Controllers;


use App\Prefix;
use App\Suffix;

class GetNameController extends Controller
{
    public function __invoke()
    {
        $first = Prefix::random()->first()->value . Suffix::random()->first()->value;
        $last = Prefix::random()->first()->value . Suffix::random()->first()->value;

        return [
            'full_name'  => "$first $last",
            'first_name' => $first,
            'last_name'  => $last
        ];
    }
}
