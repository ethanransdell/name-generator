<?php


namespace App\Http\Controllers;

use App\Services\NameService;
use Exception;
use Illuminate\Http\Request;

class GetNameController extends Controller
{
    public function __invoke($count = 1, Request $request, NameService $nameService)
    {
        $maxCombinations = $nameService->getMaxCombinations();

        if ($count > $maxCombinations) {
            throw new Exception("No more than $maxCombinations names may be requested.");
        }

        $search = [];
        $names = [];

        $i = 0;
        while ($i < $count) {
            do {
                $name = $nameService->getName();
                $hash = md5($name['full_name']);
            } while (in_array($hash, $search));

            $names[] = $name;
            $search[] = $hash;

            $i++;
        }

        return $names;
    }
}
