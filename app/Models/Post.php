<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table="posts";
    public function offsetGet(mixed $offset): mixed
    {}

    public function offsetSet(mixed $offset, mixed $value): void
    {}

    public function offsetUnset(mixed $offset): void
    {}

    public function escapeWhenCastingToString($escape = true)
    {}


}
