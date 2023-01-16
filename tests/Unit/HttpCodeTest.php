<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Phpolar\HttpCode\Code;
use ReflectionClass;

class HttpCodeTest extends TestCase
{
    public function testCodesAndNamesMatchConventions()
    {
        $codesClass = new ReflectionClass(Code::class);

        $codes = $codesClass->getConstants();

        foreach ($codes as $name => $value) {
            $this->assertIsInt($value, 'Code must for "'.$name.'" be an integer');
            $this->assertMatchesRegularExpression('/^[A-Z_]+$/', $name, 'The name "'.$name.'" must respect the naming convention for constants: only capital letters and underscores.');
        }
    }
}
