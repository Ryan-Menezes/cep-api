<?php

namespace App\Http\Controllers;

use App\Services\AddressService;

class AddressController extends Controller
{
    public function __construct(
        private AddressService $addressService
    ) {}

    public function findAdressesByCeps(string $ceps)
    {
        $ceps = str($ceps)->explode(',')->toArray();

        return $this->addressService->findByCeps($ceps);
    }
}
