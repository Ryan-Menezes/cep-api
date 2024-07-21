<?php

namespace App\Services;

use App\Repositories\AddressRepositoryInterface;

class AddressService
{
    public function __construct(
        private AddressRepositoryInterface $addressRepository
    ) {}

    public function findByCeps(array $ceps): array
    {
        return $this->addressRepository->findByCeps($ceps);
    }
}
