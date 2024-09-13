<?php

declare(strict_types=1);

namespace App\Enums;

enum FlagReasonEnum: string
{
    case FantasticComment = 'Fantastic comment';
    case HtmlDisplayError = 'HTML/display error';
    case OffensiveSexismRacism = 'Offensive/sexism/racism';
    case BreaksTheGuidelines = 'It breaks the guidelines';
    case NoiseDerailOther = 'Noise/derail/other';
    case FlagWithNote = 'Flag with note';
}
