<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HdfcCourseOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'course_type',
        'receipt_id',
        'order_id',
        'amount',
        'payment_id',
        'status',
        'hdfc_payment_data',
    ];

    public function course(){

        if ($this->course_type == 'upsc') {
            return $this->belongsTo(Course::class, 'course_id', 'id');
        }

        if ($this->course_type == 'apsc') {
            return $this->belongsTo(ApscCourses::class, 'course_id', 'id');
        }

        if ($this->course_type == 'study') {
            return $this->belongsTo(StudyMaterial::class, 'course_id', 'id');
        }

        if ($this->course_type == 'recorded') {
            return $this->belongsTo(Recorded::class, 'course_id', 'id');
        }
    }


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public static function create_order_id(): string
    {
        $lastOrderId = HdfcCourseOrder::orderBy('order_id', 'desc')->first();
        if ($lastOrderId == null) {
            return 'ACS010000000';
        } else {

            $newOrderId = 'ACS' . str_pad(
                    substr($lastOrderId->order_id, 3) + 1,
                    9,
                    '0',
                    STR_PAD_LEFT
                );

            return $newOrderId;
        }
    }


    /**
     * Function to encrypt the data
     * @param $plainText
     * @param $key
     * @return string
     */
    public static function encrypt($plainText,$key): string
    {
        $key = self::hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        $encryptedText = bin2hex($openMode);
        return $encryptedText;
    }

    /**
     * Function to decrypt data
     * @param $encryptedText
     * @param $key
     * @return string
     */
    public static function decrypt($encryptedText,$key): string
    {
        $key = self::hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = self::hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }

    /**
     * Padding Function
     * @param $plainText
     * @param $blockSize
     * @return string
     */
    public function pkcs5_pad($plainText, $blockSize): string
    {
        $pad = $blockSize - (strlen($plainText) % $blockSize);
        return $plainText . str_repeat(chr($pad), $pad);
    }

    /**
     * Hexadecimal to Binary function for php 4.0 version
     * @param $hexString
     * @return string
     */
    public static function hextobin($hexString): string
    {
        $length = strlen($hexString);
        $binString="";
        $count=0;
        while($count<$length)
        {
            $subString =substr($hexString,$count,2);
            $packedString = pack("H*",$subString);
            if ($count==0)
            {
                $binString=$packedString;
            }

            else
            {
                $binString.=$packedString;
            }

            $count+=2;
        }
        return $binString;
    }
}
