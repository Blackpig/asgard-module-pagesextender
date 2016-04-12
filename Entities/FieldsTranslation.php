<?php namespace Modules\PagesExtender\Entities;

use Illuminate\Database\Eloquent\Model;

class FieldsTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['commercial', 'self_storage', 'packing_materials'];
    protected $table = 'pagesextender__fields_translations';
}
