<?php

namespace App\Repo;

use App\Models\Cards;

class TarbergOperationRepository implements IBankRepo
{

    public function deposit($card, $amount)
    {
        // TODO: Implement deposit() method.
    }

    public function withdraw($card, $amount)
    {
        // TODO: Implement withdraw() method.
    }

    public function balance($card)
    {
        // TODO: Implement balance() method.
    }

    public function history($card, $dates)
    {
        // TODO: Implement history() method.
    }

    public function insert($card_no,$pass_code)
    {
        return Cards::query()->select(['card_no','expire_date','balance'])
            ->where('is_active',true)
            ->where('card_no',$card_no)
            ->where('pass_code',$pass_code)->firstOrFail();

    }

    public function update($entity)
    {
        // TODO: Implement update() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function all($criteria)
    {
        // TODO: Implement all() method.
    }

    public function search($criteria)
    {
        // TODO: Implement search() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
