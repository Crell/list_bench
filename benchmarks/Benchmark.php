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

/**
 * @Revs(10)
 * @Iterations(3)
 * @Warmup(2)
 * @OutputTimeUnit("milliseconds", precision=3)
 */
abstract class Benchmark
{

    public function provideItems() : iterable
    {
        foreach ([1, 20, 50, 100, 500, 1000, 10000, 100000] as $count) {
            yield array_fill(1, $count, 'a');
        }
    }
}
