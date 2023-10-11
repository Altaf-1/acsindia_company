<?php

namespace App\Http\Controllers\AdminController;

use App\FreeMasterClass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreeMasterClassController extends Controller
{
    public function index()
    {
        $datas = FreeMasterClass::all();
        return view('admin.free_master_class.index', compact('datas'));
    }
    public function destroy($id)
    {
        $data = FreeMasterClass::where('id', $id)->first();

        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'No Data found.');
        }
    }
}
