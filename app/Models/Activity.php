<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'foto'
    ];

    protected $appends = ['url', 'date_format'];

    public function getUrlAttribute(){
        $url = new \stdClass;
        $url->image = asset('images/Kegiatan/' . $this->foto);
        return $url;
    }

    public function getDateFormatAttribute(){
		return (object)[
			'created_at' 		=> date('Y/m/d', strtotime($this->created_at)),
			'updated_at' 		=> date('Y/m/d', strtotime($this->updated_at)),
		];
	}
}
