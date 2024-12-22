<?php

namespace App\Models\Konfigurasi;

use App\Models\Konfigurasi\Menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    //
    use HasFactory;
    protected $guard=['id'];

    public function subMenus()
    {
        return $this->hasMany(Menu::class, 'main_menu_id');
    }
}
