<?php

namespace App\Repo;

interface IRepo
{
    function insert($card_no,$pass_code);

    function update($entity);

    function get($id);

    function all($criteria);

    function search($criteria);

    function delete($id);
}
