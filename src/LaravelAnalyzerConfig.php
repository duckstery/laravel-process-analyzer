<?php

namespace Duckstery\Laravel\Analyzer;

use Duckstery\Analyzer\AnalyzerConfig;

class LaravelAnalyzerConfig extends AnalyzerConfig
{
    public function enable(): bool
    {
        return config('process-analyzer.enable');
    }

    public function defaultProfile(): string
    {
        return config('process-analyzer.defaultProfile');
    }

    public function defaultRecordGetter(): ?string
    {
        return config('process-analyzer.defaultRecordGetter');
    }

    public function profileExtras(): array
    {
        return config('process-analyzer.profileExtras');
    }

    public function profile(): string
    {
        return config('process-analyzer.profile');
    }

    public function record(): string
    {
        return config('process-analyzer.record');
    }

    public function printer(): string
    {
        return config('process-analyzer.printer');
    }

    public function prettyPrint(): bool
    {
        return config('process-analyzer.prettyPrint');
    }

    public function oneLine(): bool
    {
        return config('process-analyzer.oneLine');
    }

    public function showUID(): bool
    {
        return config('process-analyzer.showUID');
    }

    public function useFile(): string|false
    {
        return config('process-analyzer.useFile');
    }

    public function useConsole(): bool
    {
        return config('process-analyzer.useConsole');
    }

    public function profilePrefix(): string
    {
        return config('process-analyzer.profilePrefix');
    }

    public function profileSuffix(): string
    {
        return config('process-analyzer.profileSuffix');
    }

    public function recordPrefix(): string
    {
        return config('process-analyzer.recordPrefix');
    }

    public function recordSuffix(): string
    {
        return config('process-analyzer.recordSuffix');
    }

    public function timeUnit(): string
    {
        return config('process-analyzer.timeUnit');
    }

    public function timeFormatter(float $value): string
    {
        return config('process-analyzer.timeFormatter') ?? parent::timeFormatter($value);
    }

    public function memUnit(): string
    {
        return config('process-analyzer.memUnit');
    }

    public function memFormatter(int $value): string
    {
        return config('process-analyzer.memFormatter') ?? parent::memFormatter($value);
    }

    public function topLeftChar(): string
    {
        return config('process-analyzer.topLeftChar');
    }

    public function topRightChar(): string
    {
        return config('process-analyzer.topRightChar');
    }

    public function bottomLeftChar(): string
    {
        return config('process-analyzer.bottomLeftChar');
    }

    public function bottomRightChar(): string
    {
        return config('process-analyzer.bottomRightChar');
    }

    public function topForkChar(): string
    {
        return config('process-analyzer.topForkChar');
    }

    public function rightForkChar(): string
    {
        return config('process-analyzer.rightForkChar');
    }

    public function bottomForkChar(): string
    {
        return config('process-analyzer.bottomForkChar');
    }

    public function leftForkChar(): string
    {
        return config('process-analyzer.leftForkChar');
    }

    public function crossChar(): string
    {
        return config('process-analyzer.crossChar');
    }

    public function horizontalLineChar(): string
    {
        return config('process-analyzer.horizontalLineChar');
    }

    public function verticalLineChar(): string
    {
        return config('process-analyzer.verticalLineChar');
    }
}
