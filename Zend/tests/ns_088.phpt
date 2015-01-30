--TEST--
Nested batch use statements syntax error
--FILE--
<?php
namespace Fiz\Biz\Buz {
    use Foo\Bar\Baz\{
        A,
        B {
            C
            D,
            E
        }
    };
}
?>
--EXPECTF--
Parse error: syntax error, unexpected '{', expecting ',' or '}' in %sns_088.php on line 5
