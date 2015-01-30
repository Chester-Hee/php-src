--TEST--
Batch use statements with compound namespaces
--FILE--
<?php
namespace Foo\Bar {
    class A { function __construct() {echo __METHOD__,"\n";} }
}
namespace Foo\Bar\Baz {
    class B { function __construct() {echo __METHOD__,"\n";} }
}
namespace Fiz\Biz\Buz {

    use Foo\Bar\{ A, Baz\B };
    new A;
    new B;
}

--EXPECTF--
Foo\Bar\A::__construct
Foo\Bar\Baz\B::__construct