<?php

namespace App\Imports;

use App\Coupon;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserCouponImport implements ToCollection, WithHeadingRow
{

    public $coupon_code;
    public $coupon_discount;

    public function __construct($coupon_code, $coupon_discount)
    {
        $this->coupon_code = $coupon_code;
        $this->coupon_discount = $coupon_discount;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        foreach ($collection as $row) {
            
            if (empty($row['email']) || empty($row['phone'])) {
                continue;
            }

            # check if user coupon already exists
            $userCouponExists = Coupon::where('email', $row['email'])
                ->where('phone', $row['phone'])
                ->where('applied', 0)
                ->where('status', 1)
                ->first();

            # if exists then update the values with given coupon code and discount
            if ($userCouponExists) {
                Log::channel('laravel')
                    ->info('Coupon already exists for user: ' . $row['email'] . ' and phone: ' . $row['phone']);
                $userCouponExists->update([
                    'coupon_code' => $this->coupon_code,
                    'coupon_discount' => $this->coupon_discount,
                    'applied' => 1,
                    'status' => 0,
                ]);
            } else {
                # if not exists then create new coupon
                Coupon::create([
                    'coupon_code' => $this->coupon_code,
                    'coupon_discount' => $this->coupon_discount,
                    'email' => $row['email'],
                    'phone' => $row['phone'],
                    'status' => 0,
                    'applied' => 1,
                ]);
            }

        }
    }
}
