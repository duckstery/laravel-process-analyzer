<?php

namespace Duckstery\Laravel\Analyzer;

use Duckstery\Analyzer\AnalysisPrinter;
use Duckstery\Analyzer\Interfaces\IAProfile;

class LaravelAnalysisPrinter extends AnalysisPrinter
{
    public function onPreprocessProfile(IAProfile $profile): void
    {
        // Add datetime to Profile's name
        $profile->setName(sprintf('[%s] %s', date('Y-m-d h:i:s'), $profile->getName()));
    }
}
