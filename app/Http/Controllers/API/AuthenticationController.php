<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Traits\Helpers\ApiResponseTrait;
use App\Models\Restaruant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
    use ApiResponseTrait;
    public function chackRestaurant(Request $request){
        $request->validate([
            'type' => 'required|in:master',
            'phone' => 'required',
        ]);

        return $this->respondWithResource($this->responceMake(["Key"=>["key"=>['key'=>"asdasd"]]]),'Success',200,['auth'=>"dsfdsfdsfsd"]);

    }


    public function restaurantRegister(Request $request){
        $rules =[
            'type' => 'required|in:master',
            'email' => 'required|email',
            'logo' => 'required|image',
            'restaurant_name' => 'required|string',
            'lat' => 'string',
            'long' => 'string',
            'phone' => 'required|string|unique:users',
            'alternet_phone' => 'string',


        ];
        if(!$request->lat){
            $rules['restaurant_address']='required|min:2';
        }
        $request->validate($rules);
        $userObj= $request->only('name','email','phone');
        DB::beginTransaction();
        $user = User::create( $userObj);
        $restaurntObj= $request->only('alternet_phone','lat','long','logo');
        $restaurntObj['name'] = $request->restaurant_name;
        $restaurntObj['address'] = $request->restaurant_address;
        $restaurntObj['user_id'] = $user->id;
        $restaurnt= Restaruant::create($restaurntObj);
        $otp = $user->sendEmailVerificationNotification();
        $accessToken = $user->createToken("Master")->plainTextToken;
        // return ($restaurnt);
        DB::commit();
        return $this->respondCreatedWithWorning("Restaruant register successfully. Please verify your email.",[],201,['access_token'=> $accessToken]);
        
    }
}
