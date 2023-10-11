<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Order;
use App\UserExtraMaterial;
use Illuminate\Http\Request;

class AdminUserExtraMaterialController extends Controller
{
    //
    public function add_remove_material(Request $request){
        $data = $request->only('course_type_id', 'course_id', 'extra_material_id', 'course_1', 'course_2',
            'no_material');

        $data['user_id'] = auth()->user()->id;

        $order = Order::all()->where('user_id', $data['user_id'])->where('course_id', $data['course_id'])
            ->first();

        if($order){
            if($order->status == 0 or $order->status == 1){
                return redirect()->back()
                    ->with('error', 'You have existing order for this course. Please complete the order first');
            }
        }



        $user_extra_material = UserExtraMaterial::get_user_extra_material(
            $data['user_id'],
            $data['course_type_id'],
            $data['course_id']
        );

        // remove all extra material
        $user_extra_material->each(function ($item, $key){
            $item->delete();
        });


        // add extra material
        if(key_exists('course_1', $data) && $data['course_1'] == 'on'){
           $data['extra_material_id'] = 1;
           UserExtraMaterial::create($data);
        }

        if(key_exists('course_2', $data) && $data['course_2'] == 'on'){
            $data['extra_material_id'] = 2;
            UserExtraMaterial::create($data);
        }

        if(key_exists('no_material', $data) && $data['no_material'] == 'on'){
            $data['extra_material_id'] = 3;
            UserExtraMaterial::create($data);
        }

        return redirect()->back()->with('success', 'Extra material added or removed successfully');

    }
}
