<?php

namespace App\Exceptions;

use Exception;

class ProductionNotBelongsToUser extends Exception
{
    public function render()
    {
      return [
        'errors' => 'Product not belongs to User',
      ];
    }
}
