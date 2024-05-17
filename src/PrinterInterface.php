<?php

namespace Str5\Test;

interface PrinterInterface 
{
    public function print(string $text, int $count): string;
}