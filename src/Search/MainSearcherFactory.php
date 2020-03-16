<?php


namespace App\Search;


class MainSearcherFactory
{
    const SEARCHERS = [
        AddressSearcher::class,
        CarNumberSearcher::class
    ];

    public function createMainSearcher(): MainSearcher
    {
        $mainSearcher = new MainSearcher();
        foreach (self::SEARCHERS as $searcherClass) {
            $mainSearcher->addSearcher(new $searcherClass);
        }

        return $mainSearcher;
    }

}