<?php 

namespace Str5\Test;

class Printer implements PrinterInterface 
{
    public function print(string $text, int $count): string
    {
        return str_repeat($text, $count);
    }
}