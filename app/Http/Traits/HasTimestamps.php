<?php

namespace App\Http\Traits;

use Illuminate\Support\Carbon;

trait HasTimestamps
{
    public function createdAt(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('Y-m-d H:i');
    }

    public function updatedAt(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('Y-m-d H:i');
    }
}
