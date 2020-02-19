<?php


namespace App\Search;


use App\Entity\Inn;

class CarNumberSearcher implements SearcherInterface
{
    public function supports(string $text): bool
    {
        return strlen($text) === 6;
    }

    public function resolve(string $text): array
    {
        // TODO: Implement resolve() method.
    }

}