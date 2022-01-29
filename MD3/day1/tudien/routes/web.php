<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tudien', function () {
    return view('tudien');
});


Route::post ("/dich", function(Illuminate\Http\Request $request){
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $request = $_POST["english"];
        $flag = 0;
        $dictionary = array(
            "hello" => "xin chào",
            "how" => "thế nào",
            "book" => "quyển vở",
            "computer" => "máy tính"
        );
        foreach ($dictionary as $word => $description) {
            if ($word == $request) {
                echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
                echo "<br/>";
                $flag = 1;
            }
        }

        if ($flag == 0) {
            echo "Không tìm thấy từ cần tra.";
        }
    }
    
    return view('result', compact('description'));
});