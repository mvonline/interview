<?php

namespace App\Interfaces;

use App\Models\Cards;

interface CardOperationInterface
{
    function create(Cards $card);

    function deleteCard(Cards $card);

    function expireCard(Cards $card);

    function renewCard(Cards $card);
}
