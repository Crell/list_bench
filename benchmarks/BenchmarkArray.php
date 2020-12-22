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

class BenchmarkArray extends Benchmark
{

    /**
     * @ParamProviders({"provideItems"})
     */
    public function bench_map_array(array $items)
    {
        $fn = fn($v) => $v;

        \amap($items, $fn);
    }

}
