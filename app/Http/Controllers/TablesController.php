<?php
use App\irigasi;
use App\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function tables()
    {
        $irridentify = \App\Irigasi::all();
        return view('admin.tables', ['irridentify' => $irridentify]);
    } ///

}
