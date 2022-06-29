<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Searchable;

class Doctor extends Model
{
    use HasFactory, Searchable;
    protected $guarded = ['id'];
    #[SearchUsingFullText('username')]

    public function toSearchableArray()
    {
        return [
            'name'=>$this->name,
            'username'=>$this->username,
            'nip'=>$this->nip,
            'polies_id'=>$this->polies_id
        ];
    }
}
