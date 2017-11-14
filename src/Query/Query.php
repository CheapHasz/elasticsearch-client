<?php


namespace Novaway\ElasticsearchClient\Query;

use Novaway\ElasticsearchClient\Clause;

interface Query extends Clause
{
    public function formatForQuery(): array;
}
