<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'artikel',
        'foto',
        'penulis'
    ];

    protected $appends = ['url', 'date_format'];

    public function getUrlAttribute(){
        $url = new \stdClass;
        $url->image = asset('images/Artikel/' . $this->foto);
        $url->show  = route('artikel.show', $this->id);
        return $url;
    }

    public function getDateFormatAttribute(){
		return (object)[
			'created_at' 		=> date('Y/m/d', strtotime($this->created_at)),
			'updated_at' 		=> date('Y/m/d', strtotime($this->updated_at)),
		];
	}
}
