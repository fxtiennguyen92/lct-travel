<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model implements Auditable
{
    /** Auditable */
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['key', 'value', 'project_id'];

    public static function getValueByKey(string $key)
    {
        $setting = Setting::firstOrCreate(
            ['key' => $key],
            ['value' => null]);

        return $setting->value;
    }

    public static function storeValue(string $key, $value = '')
    {
        $setting = Setting::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        return $setting;
    }
}
