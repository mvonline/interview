<?php

namespace App\Interfaces;

use App\Http\Requests\insertCardRequest;

interface BankOperationInterface
{
    function insert(insertCardRequest $request);

    function history($card);

    function changePasscode($card,$old_passcode,$new_passcode);

    function deposit($card,$amount);

    function withdraw($card,$amount);
}
