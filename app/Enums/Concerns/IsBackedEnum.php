<?php

    namespace App\Enums\Concerns;

    /**
     * @template T
     */
    trait IsBackedEnum {

        /**
         * @return array<T>
         */
        public static function values(): array {
            return array_map(
                fn (\UnitEnum $case) => $case->value,
                self::cases()
            );
        }
    }
