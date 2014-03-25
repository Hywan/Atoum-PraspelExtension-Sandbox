<?php

namespace Foo;

class Bar {

    /**
     * @behavior valid_email {
     *     @requires email: /[a-z]+\.[a-z]+@[a-z]\.(com|net|org|hl)/;
     *     @ensures  \result: boolean();
     * }
     * @behavior invalid_email {
     *     @requires email: undefined();
     *     @throwable \Exception e;
     * }
     */
    public function isAllowed ( $email ) {

        if(0 == preg_match('/[a-z]+\.[a-z]+@[a-z]\.(com|net|org|hl)/', $email))
            throw new \Exception('Damn…');

        return true;
    }

    public function uncovered ( ) {

        return null;
    }
}
