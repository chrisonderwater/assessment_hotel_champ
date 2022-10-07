<?php

namespace App\Handlers;

use App\Models\Spot;

class WindmeterDataHandlerFactory
{
    public const BRAND1 = 'brand1';
    public const BRAND2 = 'brand2';
    public const BRAND3 = 'brand3';

    public const HANDLERS = [
        self::BRAND1 => Brand1Handler::class,
        self::BRAND2 => Brand2Handler::class,
        self::BRAND3 => Brand3Handler::class
    ];

    public function build(Spot $spot): WindmeterDataHandlerInterface
    {
        $handlerString = self::HANDLERS[$spot->brand] ?? null;

        if (!$handlerString) {
            throw new \Exception('Could not find a valid handler for brand: ' . $spot->brand);
        }

        $handler = new $handlerString;

        if (!$handler instanceof WindmeterDataHandlerInterface) {
            throw new \Exception('The handler should implement the WindmeterDataHandlerInterface');
        }

        return new $handler;
    }
}
