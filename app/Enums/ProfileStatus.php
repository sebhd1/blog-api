<?php

    namespace App\Enums;

    use App\Enums\Concerns\BackedEnum;
    use App\Enums\Concerns\IsBackedEnum;
    use App\Enums\Concerns\Localizable;

    /**
     * @implements BackedEnum<string>
     */
    enum ProfileStatus: string implements BackedEnum, Localizable {
        use IsBackedEnum;

        case Active = 'active';
        case Inactive = 'inactive';

        public function text(): string {
            return match ($this) {
                self::Active => __('attivo'),
                self::Inactive => __('inattivo'),
            };
        }
    }
