<?php

namespace App\Services;

use App\Models\Clube;

class ClubeService
{
    public function get(int $id = null)
    {
        // return $id;
        if ($id) {
            return Clube::get($id);
        } else {
            return Clube::get();
        }
    }

    public function post($dados)
    {
    }
}
