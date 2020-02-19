<?php


namespace App\Search;


use App\Entity\Inn;

class MainSearcher
{
    /**
     * @var  SearcherInterface[]
     */
    protected array $searchers;

    public function addSearcher(SearcherInterface $searcher)
    {
        $this->searchers[] = $searcher;
    }

    /**
     * @param string $text
     * @return Inn[]
     */
    public function getInns(string $text): array
    {
        $inns = [];
        foreach ($this->searchers as $searcher) {
            if ($searcher->supports($text)) {
                $inns = array_merge($searcher->resolve($text), $inns);
            }

        }

        return $inns;

    }

}