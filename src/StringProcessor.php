<?php

declare(strict_types=1);

namespace PavelMiasnov\FirstComposerPackage;

class StringProcessor
{
    /**
     * Count capital letters in a string
     *
     * @param int $length
     *
     * @return int
     */
    public static function getCountCapitals(string $s): int
    {
        return mb_strlen(preg_replace('![^A-Z]+!', '', $s));
    }
}
