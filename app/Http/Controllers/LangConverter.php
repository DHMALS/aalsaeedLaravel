<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class LangConverter extends Controller
{
    public function langConverter($lang)
    {
        if(in_array($lang, config('app.available_locales'))){
            
            if($lang == 'ar'){
                $dir = 'rtl';
            }else{
                $dir = 'ltr';            
            }
            App::SetLocale($lang);
        }else{
            return view('notFound');
        }
        return view('index')->with('dir', $dir);
    }
}
