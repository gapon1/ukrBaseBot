<?php


namespace App\Search;


use App\Entity\Inn;

class AddressSearcher implements SearcherInterface
{
    public function supports(string $text): bool
    {
        return false;
    }

    public function resolve(string $text): array
    {
        // TODO: Implement resolve() method.
    }


}