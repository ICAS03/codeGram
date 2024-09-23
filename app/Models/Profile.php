<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

  protected $guarded = [];

  public function profileImage() {
    $imagePath = ($this->image) ? $this->image : 'profile/zmTmnzU2aDjMTe7Sgx4GozIqP0MOpv4RScl1N8h2.png';
    return '/storage/' . $imagePath;
  }

  public function user() {
    return $this->belongsTo(User::class);
  }
}
