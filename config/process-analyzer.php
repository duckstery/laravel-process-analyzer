<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable analyzer
    |--------------------------------------------------------------------------
    |
    | Option to enable/disable Analyzer
    |
    | Supported: true, false
    |
    */

    'enable' => true,

    /*
    |--------------------------------------------------------------------------
    | Default Profile's name
    |--------------------------------------------------------------------------
    |
    | Default Profile name. Default is "Default"
    |
    | Supported: string
    |
    */

    'defaultProfile' => 'Default',

    /*
    |--------------------------------------------------------------------------
    | Default Record's name getter
    |--------------------------------------------------------------------------
    |
    | Default Record's name getter. Use when no Record's name is provided
    |
    | Supported: null, method's name, array callback
    |
    */

    'defaultRecordGetter' => null,

    /*
    |--------------------------------------------------------------------------
    | Profile's extras
    |--------------------------------------------------------------------------
    |
    | Define Profile with extra data. These data will be fetched before start
    | or after stop recording. Only using defined Profile will provide these
    | extra data.
    |
    | Supported: array
    |
    */

    'profileExtras' => [
        "Default" => [
            "peak" => [
                "handler" => "memory_get_peak_usage",
                "formatter" => [\Duckstery\Analyzer\Utils::class, "appendB"],
                // Get extras before starting
                "start" => true,
                // Get extras before stopping
                "stop" => true,
                // Get the diff between 'stop' and 'start'
                "diff" => true
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Profile instance
    |--------------------------------------------------------------------------
    |
    | Define Profile class
    |
    | Supported: IAProfile
    |
    */

    'profile' => \Duckstery\Analyzer\Structures\AnalysisProfile::class,

    /*
    |--------------------------------------------------------------------------
    | Record instance
    |--------------------------------------------------------------------------
    |
    | Define Record class
    |
    | Supported: IARecord
    |
    */

    'record' => \Duckstery\Analyzer\Structures\AnalysisRecord::class,

    /*
    |--------------------------------------------------------------------------
    | Printer instance
    |--------------------------------------------------------------------------
    |
    | Define Printer class
    |
    | Supported: IAPrinter
    |
    */

    'printer' => \Duckstery\Laravel\Analyzer\LaravelAnalysisPrinter::class,

    /*
    |--------------------------------------------------------------------------
    | Pretty print
    |--------------------------------------------------------------------------
    |
    | Print result as table
    |
    | Supported: true, false
    |
    */

    'prettyPrint' => true,

    /*
    |--------------------------------------------------------------------------
    | One line print
    |--------------------------------------------------------------------------
    |
    | Print result as one line. Only usable when prettyPrint is false
    |
    | Supported: true, false
    |
    */

    'oneLine' => false,

    /*
    |--------------------------------------------------------------------------
    | Show UID
    |--------------------------------------------------------------------------
    |
    | Show Record's UID in printed result
    |
    | Supported: true, false
    |
    */

    'showUid' => true,

    /*
    |--------------------------------------------------------------------------
    | Use file
    |--------------------------------------------------------------------------
    |
    | Print result to file
    |
    | Supported: string, false
    |
    */

    'useFile' => storage_path('logs' . DIRECTORY_SEPARATOR . 'analyzer'),

    /*
    |--------------------------------------------------------------------------
    | Use console
    |--------------------------------------------------------------------------
    |
    | Print result to console
    |
    | Supported: true, false
    |
    */

    'useConsole' => false,

    /*
    |--------------------------------------------------------------------------
    | Profile's name prefix
    |--------------------------------------------------------------------------
    |
    | Add prefix to Profile's name
    |
    | Supported: string
    |
    */

    'profilePrefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Profile's name suffix
    |--------------------------------------------------------------------------
    |
    | Add suffix to Profile's name
    |
    | Supported: string
    |
    */

    'profileSuffix' => '',

    /*
    |--------------------------------------------------------------------------
    | Record's name prefix
    |--------------------------------------------------------------------------
    |
    | Add prefix to Record's name
    |
    | Supported: string
    |
    */

    'recordPrefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Record's name suffix
    |--------------------------------------------------------------------------
    |
    | Add suffix to Record's name
    |
    | Supported: string
    |
    */

    'recordSuffix' => '',

    /*
    |--------------------------------------------------------------------------
    | Time unit
    |--------------------------------------------------------------------------
    |
    | Define unit of time
    |
    | Supported: 's', 'ms', 'μs', 'ns'
    |
    */

    'timeUnit' => 'ms',

    /*
    |--------------------------------------------------------------------------
    | Time formatter
    |--------------------------------------------------------------------------
    |
    | Define time formatter. Formatter will modify value before print
    | When this option is defined, 'timeUnit' will be disabled
    |
    | Supported: null, array, callable
    |
    */

    'timeFormatter' => null,

    /*
    |--------------------------------------------------------------------------
    | Memory unit
    |--------------------------------------------------------------------------
    |
    | Define unit of memory
    |
    | Supported: 'gb', 'mb', 'kb', 'b'
    |
    */

    'memUnit' => 'kb',

    /*
    |--------------------------------------------------------------------------
    | Memory formatter
    |--------------------------------------------------------------------------
    |
    | Define memory formatter. Formatter will modify value before print
    | When this option is defined, 'memUnit' will be disabled
    |
    | Supported: null, array, callable
    |
    */

    'memFormatter' => null,

    /*
    |--------------------------------------------------------------------------
    | Table characters
    |--------------------------------------------------------------------------
    |
    | Analyzer use these characters to create a table
    | Modify these options to change printed table style
    |
    | Supported: string
    |
    */

    'topLeftChar' => '╭',

    'topRightChar' => '╮',

    'bottomLeftChar' => '╰',

    'bottomRightChar' => '╯',

    'topForkChar' => '┬',

    'rightForkChar' => '┤',

    'bottomForkChar' => '┴',

    'leftForkChar' => '├',

    'crossChar' => '┼',

    'horizontalLineChar' => '─',

    'verticalLineChar' => '│',

];
