<?php
declare(strict_types=1);

namespace Crell\list_bench\Benchmarks;

use PhpBench\Benchmark\Metadata\Annotations\AfterMethods;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\OutputTimeUnit;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;
use PhpBench\Benchmark\Metadata\Annotations\ParamProviders;

class BenchmarkGenerator extends Benchmark
{

    /**
     * @ParamProviders({"provideItems"})
     */
    public function bench_map_generator(array $items)
    {
        $fn = fn($v) => $v;

        \iterator_to_array(\imap($items, $fn));
    }

}
