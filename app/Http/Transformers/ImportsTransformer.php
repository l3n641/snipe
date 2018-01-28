<?php

namespace App\Http\Transformers;

use App\Models\Import;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;

class ImportsTransformer
{

    public function transformImports($imports)
    {
        $array = array();
        foreach ($imports as $import) {
            $array[] = self::transformImport($import);
        }
        return $array;
    }

    public function transformImport(Import $import)
    {
        $array = [
            'id' => (int)$import->id,
            'file_path' => e($import->file_path),
            'filesize' => Setting::fileSizeConvert($import->filesize),
            'name' => e($import->name),
            'import_type' => e($import->import_type),
            'created_at' => $this->translateTimeFormat($import->created_at->diffForHumans()),
            'header_row' => $import->header_row,
            'first_row' => $import->first_row,
            'field_map' => $import->field_map,
        ];

        return $array;
    }

    public function translateTimeFormat($date)
    {
        $origin = [
            '/year[s]?/',
            '/month[s]?/',
            '/day[s]?/',
            '/week[s]?/',
            '/hour[s]?/',
            '/minute[s]?/',
            '/second[s]?/',
            '/ago/',
        ];
        $destino = [
            '年', '月', '天', '周', "小时", '分钟', '秒', "之前"
        ];

        $result = preg_replace($origin, $destino, $date);
        return $result;
    }
}
