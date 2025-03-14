<?php

declare(strict_types=1);

namespace App\Enums;

enum FlagReasonEnum: string
{
    case Fantastic = 'Fantastic';
    case HtmlDisplayError = 'HTML/display error';
    case OffensiveSexismRacism = 'Offensive/sexism/racism';
    case ItBreaksTheGuidelines = 'It breaks the guidelines';
    case NoiseDerailOther = 'Noise/derail/other';
    case FlagWithNote = 'Flag with note';

    public static function getValuesAsArray(): array
    {
        return array_column(FlagReasonEnum::cases(), column_key: 'value');
    }

    public function slug(): string
    {
        return match ($this) {
            FlagReasonEnum::Fantastic => 'fantastic',
            FlagReasonEnum::HtmlDisplayError => 'html-display-error',
            FlagReasonEnum::OffensiveSexismRacism => 'offensive-sexism-racism',
            FlagReasonEnum::ItBreaksTheGuidelines => 'it-breaks-the-guidelines',
            FlagReasonEnum::NoiseDerailOther => 'noise-derail-other',
            FlagReasonEnum::FlagWithNote => 'flag-with-note',
        };
    }

}
