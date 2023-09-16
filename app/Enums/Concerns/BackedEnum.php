<?php

    namespace App\Enums\Concerns;


    /**
     * @template T
     */
    interface BackedEnum {

        /**
         * Extracts all the values from the cases of the given enum.
         *
         * @return array<T>
         */

        public static function values() : array;

    }
