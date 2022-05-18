<?php
namespace Tests\Search;

use MercuryHolidays\Search\Searcher;
use PHPUnit\Framework\TestCase;

class SearcherTest extends TestCase
{
    // You can remove this test when it is not needed.
    public function testSearchDoesReturnEmptyArray(): void
    {
        $searcher = new Searcher();

        $testSearch = $searcher->search(2, 10, 60);

        $this->assertIsArray($testSearch);
    }
}
