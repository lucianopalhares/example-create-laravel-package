<?php

namespace Lucianopalhares\Rexfilials\Entities;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $table = 'tasks';

  protected $fillable = [
      'name',
  ];
}
