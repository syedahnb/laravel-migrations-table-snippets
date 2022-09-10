<?php


........

use Illuminate\Support\Facades\DB;
Route::get('filename',function(){

    $filesName = File::files(base_path().'\database\migrations\\');
    foreach ($filesName as $filename) {
         //  grab only filename without .php extension
        $file=pathinfo($filename,PATHINFO_FILENAME);
        // display filename
        echo "$file " . "<br/>";
        DB::table('migrations')->insert(
            [
                'migration'=>$file,
                'batch'=>1
            ]
        );
    }
});
