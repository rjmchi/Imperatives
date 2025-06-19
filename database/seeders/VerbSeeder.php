<?php

namespace Database\Seeders;

use App\Models\Verb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VerbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $verbs = $this->readVerbs('database/seeders/verbs.txt');

        foreach($verbs as $verb){
            Verb::create([
                'verb'=> $verb[0],
                'informal'=>$verb[1],
                'neginformal'=>$verb[2],
                'formal'=>$verb[3],
                'negformal'=>$verb[4],
                'plural'=>$verb[5],
                'negplural'=>$verb[6],
            ]);
        }
    }

    function readVerbs($filename)
    {
        $rows = [];
        if (($handle = fopen($filename, "r")) !== false) {
            while (($data = fgetcsv($handle)) !== false) {
                if (count($data) === 7) {
                    $rows[] = $data;
                }
            }
            fclose($handle);
        }
        return $rows;
    }
}
