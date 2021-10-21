<?php

namespace App\Http\Controllers\API;

use App\Interfaces\CardOperationInterface;
use App\Models\Cards;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CardController extends Controller implements CardOperationInterface
{

    function create(Cards $card)
    {
        // TODO: Implement create() method.
    }

    function deleteCard(Cards $card)
    {
        // TODO: Implement deleteCard() method.
    }

    function expireCard(Cards $card)
    {
        // TODO: Implement expireCard() method.
    }

    function renewCard(Cards $card)
    {
        // TODO: Implement renewCard() method.
    }
}
