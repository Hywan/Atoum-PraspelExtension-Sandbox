<?php

namespace tests\units\Foo;

class Bar extends \Atoum\PraspelExtension\Test {

    /**
     * 1. Bind current specification to the tested class.
     * 2. Declare invariants.
     */
    public function beforeTestMethod ( $method ) {

        $out = parent::beforeTestMethod($method);
        $specification = $this->praspel->getSpecification();
        $specification->bindToClass('\Foo\Bar');
        $registry = \Hoa\Praspel::getRegistry();

        return $out;
    }

    /**
     * Method: \Foo\Bar::isAllowed.
     * Location: /Users/hywan/Development/Hoa/Laboratory/Atoum/Sandbox/source/Foo/Bar.php#17.
     * Hash: 7fa7c806e153a20739f779a571a1f4c1.
     * Specification:
     * 
     *     @behavior valid_email {
     *         @requires email: /[a-z]+\.[a-z]+@[a-z]\.(com|net|org|hl)/;
     *         @ensures  \result: boolean();
     *     }
     *     @behavior invalid_email {
     *         @requires email: undefined();
     *         @throwable \Exception e;
     *     }
     */

    public function test isAllowed n°1 ( ) {

        $this
            ->if($this->praspel->requires['email']->in = realdom()->regex('/[a-z]+\.[a-z]+@[a-z]\.(com|net|org|hl)/', 12))
            ->and($this->praspel->ensures['\result']->in = realdom()->boolean())
            ->then
                ->praspel->verdict('\Foo\Bar'); 

        return;
    }

    public function test isAllowed n°2 ( ) {

        $this
            ->if($this->praspel->requires['email']->in = realdom()->undefined())
            ->then
                ->praspel->verdict('\Foo\Bar'); 

        return;
    }

    public function test isAllowed n°3 ( ) {

        $this
            ->if($this->praspel->requires['email']->in = realdom()->regex('/[a-z]+\.[a-z]+@[a-z]\.(com|net|org|hl)/', 12))
            ->then
                ->praspel->verdict('\Foo\Bar'); 

        return;
    }

    public function test isAllowed n°4 ( ) {

        $this
            ->if($this->praspel->requires['email']->in = realdom()->undefined())
            ->and($this->praspel->throwable['e'] = 'Exception')
            ->then
                ->praspel->verdict('\Foo\Bar'); 

        return;
    }
}
