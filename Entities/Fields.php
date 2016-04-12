<?php namespace Modules\PagesExtender\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    use Translatable;

    protected $table = 'pagesextender__fields';
    public $translatedAttributes = ['commercial', 'self_storage', 'packing_materials'];
    protected $fillable = ['page_id','commercial', 'self_storage', 'packing_materials'];
}
