<?php

namespace App\Models\AbstractModel;

use App\Traits\Validatable;
use Illuminate\Database\Eloquent\Model;

abstract class Base extends Model
{
   use Validatable;
}