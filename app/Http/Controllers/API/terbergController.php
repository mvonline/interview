<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\insertCardRequest;
use App\Interfaces\BankOperationInterface;
use App\Repo\TarbergOperationRepository;
use Illuminate\Http\Request;

class terbergController extends Controller implements BankOperationInterface
{

    function insert(insertCardRequest $request)
    {
        $repo = new TarbergOperationRepository();
        $res = $repo->insert($request->card_no,$request->pass_code);
        return response()->json($res);
    }

    function history($card)
    {
        // TODO: Implement history() method.
    }

    function changePasscode($card, $old_passcode, $new_passcode)
    {
        // TODO: Implement changePasscode() method.
    }

    function deposit($card, $amount)
    {
        // TODO: Implement deposit() method.
    }

    function withdraw($card, $amount)
    {
        // TODO: Implement withdraw() method.
    }
}
