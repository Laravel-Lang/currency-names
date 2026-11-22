<?php

declare(strict_types=1);

namespace LaravelLang\CurrencyNames;

final readonly class CurrencyData
{
    public function __construct(
        public string $locale,
        public string $code,
        public ?int $numeric,
        public string $native,
        public string $localized,
    ) {}
}
