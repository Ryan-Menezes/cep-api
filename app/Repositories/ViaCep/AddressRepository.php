<?php

namespace App\Repositories\ViaCep;

use App\Repositories\AddressRepositoryInterface;
use App\Utils\ViaCep;

class AddressRepository implements AddressRepositoryInterface
{
    public function findByCeps(array $ceps): array
    {
        return ViaCep::get($ceps);
    }
}
