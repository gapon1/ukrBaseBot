<?php


namespace App\Search;


use App\Entity\Inn;

interface SearcherInterface
{
    public function supports(string $text): bool;

    /**
     * @param string $text
     * @return Inn[]
     */
    public function resolve(string $text): array;

}