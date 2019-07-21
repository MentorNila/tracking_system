<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrackingCode;
use App\User as User;
use DateTime;
use Tymon\JWTAuth\Facades\JWTAuth;

class TrackingCodesController extends Controller
{

    public function search(Request $request)
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        
    	$trackingCode = TrackingCode::where([
            ['tracking_code', '=', $request->tracking_code],
            ['user_id', '=', $user->id]
        ])->first();
    
    	if (empty($trackingCode)) {
    		return response()->json(['code' => 404, 'error' => 'Code not found']);
    	}

    	return response()->json(['code' => 200, 'estimated_delivery_date' => $trackingCode->estimated_delivery_date_time]);
    }
}
