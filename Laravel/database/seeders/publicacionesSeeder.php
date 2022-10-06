<?php

namespace Database\Seeders;

use App\Models\publicaciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class publicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(file_get_contents(storage_path(). "/app/public/data.json", true));
        foreach ($json as $value) {
            $publicacion = new publicaciones();
            $publicacion->id = $value->id;
            $publicacion->userId = $value->userId;
            $publicacion->title = $value->title;
            $publicacion->body = $value->body;
            $publicacion->save();
        }

    }
}
