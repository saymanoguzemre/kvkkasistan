<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    public function run()
    {
        $file_path = storage_path('app/private/documents.sql');

        DB::unprepared(
            file_get_contents($file_path)
        );
    }
}
