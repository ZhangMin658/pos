<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use Illuminate\Support\Facades\Auth;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class MerchantsController extends Controller
{
    use UploadTrait;

    // Merchant - Profile
    public function profile(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        $merchant = Merchant::where('merchant_email',Auth::user()->email)->first();
        if(!$merchant) {
            $merchant = new Merchant();
            $merchant->merchant_email = Auth::user()->email;
            $merchant->merchant_mob = 234234234;
            $merchant->save();
        }
        return view('pages.merchants.profile', [
            'pageConfigs' => $pageConfigs,
            'merchant' => $merchant
        ]);
    }

    // Merchant Update
    public function update(Request $request) {

       $merchant = Merchant::where('merchant_email',Auth::user()->email)->first();
       $merchant->merchant_name = $request->get('merchant_name');
       $merchant->merchant_area = $request->get('merchant_area');
       $merchant->merchant_address = $request->get('merchant_address');
       $merchant->merchant_tel = $request->get('merchant_tel');
       $merchant->merchant_mob = $request->get('merchant_mob');
       $merchant->merchant_location = $request->get('merchant_location');
       $merchant->merchant_instgram = $request->get('merchant_instgram');
       $merchant->merchant_whatsapp = $request->get('merchant_whatsapp');
       $merchant->merchant_email = $request->get('merchant_email');

       // Merchant Logo
       if($request->hasFile('merchant_logo')) { 

        request()->validate([
            'merchant_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $Merchant_Logo = $request->file('merchant_logo');
        $name = Str::slug("merchant_logo");
        $folder = '/storage/uploads/merchant/';
        $filePath = $folder . $name. '.' . $Merchant_Logo->getClientOriginalExtension();
        $merchant->merchant_logo= $filePath;
        $this->uploadOne($Merchant_Logo, $folder, 'public', $name);

        }

        // Merchant Stamp
       if($request->hasFile('merchant_stamp')) { 

        request()->validate([
            'merchant_stamp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $Merchant_Stamp = $request->file('merchant_stamp');
        $name = Str::slug("merchant_stamp");
        $folder = '/storage/uploads/merchant/';
        $filePath = $folder . $name. '.' . $Merchant_Stamp->getClientOriginalExtension();
        $merchant->merchant_stamp= $filePath;
        $this->uploadOne($Merchant_Stamp, $folder, 'public', $name);

        }

       $merchant->save();
       return redirect()->back();
   }


}

