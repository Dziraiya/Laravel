<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var array|string[]
     */
    protected array $newsList = [
        ['News 1', 'title text 1'],
        ['News 2', 'title text 2'],
        ['News 3', 'title text 3'],
        ['News 4', 'title text 4'],
        ['News 5', 'title text 5'],
        ['News 6', 'Кстати, реплицированные с зарубежных источников, современные исследования освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, описаны максимально подробно.'],

    ];
}
