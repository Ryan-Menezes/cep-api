<?php

namespace App\Utils;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

abstract class ViaCep
{
    public static function get(array $ceps): array
    {
        $key = implode(':', $ceps);

        return Cache::remember($key, 3600, function () use ($ceps) {
            $adresses = [];

            foreach ($ceps as $cep) {
                $address = self::getAddressByCep($cep);

                if ($address) $adresses[] = $address;
            }

            return $adresses;
        });
    }

    private static function getAddressByCep(string $cep): array|null
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if (!$response->successful() || $response->json('erro')) return null;

        return $response->json();
    }
}
