<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Http\Resources\API\CouponResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Service;

class CouponController extends Controller
{
    public function getCouponList(Request $request)
    {
        $service_id = $request->service_id;

        $service = Service::find($service_id);

        if (!$service) {
            return comman_custom_response([
                'expire_cupon' => [],
                'valid_cupon'  => [],
            ], 404, 'Service not found');
        }

        $coupon = Coupon::where('status', 1)
            ->with('serviceAdded')
            ->whereHas('serviceAdded', function ($query) use ($service_id) {
                $query->where('service_id', $service_id);
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $currentDate = Carbon::today();

        $coupon = $coupon->filter(function ($coupon) use ($service) {
            if ($coupon->discount_type == 'fixed') {
                return $coupon->discount < $service->price;
            } elseif ($coupon->discount_type == 'percentage') {
                $discountAmount = ($coupon->discount / 100) * $service->price;
                return $discountAmount < $service->price;
            }
            return false;
        });

        $expire_cupon = $coupon->where('expire_date', '<', $currentDate);
        $valid_cupon  = $coupon->where('expire_date', '>', $currentDate);

        $response = [
            'expire_cupon' => CouponResource::collection($expire_cupon),
            'valid_cupon'  => CouponResource::collection($valid_cupon),
        ];

        return comman_custom_response($response);
    }
}
