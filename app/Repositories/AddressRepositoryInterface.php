<?php

namespace App\Repositories;

interface AddressRepositoryInterface
{
    public function findByCeps(array $ceps): array;
}
