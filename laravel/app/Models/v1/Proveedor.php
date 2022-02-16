<?php
 
namespace App\Models\v1;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
 
class Proveedor extends Model
{
    use HasUUID;

    protected $table = 'proveedores';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';

}