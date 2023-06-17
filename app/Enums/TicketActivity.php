<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TicketActivity extends Enum
{
    const call = "call";
    const email = "email";
    const meeting = "meeting";
    const event = "event";
    const task = "task";
    const note = "note";
    const attachment = "attachment";
    const quote = "quote";
    const contract = "contract";
}
