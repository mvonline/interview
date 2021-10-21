<?php

namespace App\Repo;

use App\Models\Cards;

interface IBankRepo extends IRepo
{
    function deposit(Cards $card,$amount);
    function withdraw(Cards $card,$amount);
    function balance(Cards $card);
    function history(Cards $card,$dates);
}
