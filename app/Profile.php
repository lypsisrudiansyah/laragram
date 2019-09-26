<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

	public function profileImage()
	{
		$imagePath = ($this->image) ? $this->image : 'profile/cHea3RmB5RCuxuLaMtLLygkuFFwiCLEVHFAT6R4C.png';
		return '/storage/' . $imagePath;
	}

    public function followers()
    {
    	return $this->belongsToMany(User::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
