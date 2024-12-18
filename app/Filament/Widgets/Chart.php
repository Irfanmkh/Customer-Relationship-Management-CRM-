<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class Chart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?int $sort = 20;
    protected int | string | array $columnSpan = 'full';
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
