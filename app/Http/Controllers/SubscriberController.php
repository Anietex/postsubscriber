<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function subscribe(SubscribeRequest  $request){

        $data = $request->validated();
        $subscriber = Subscriber::create($data);

        return $this->success($subscriber);
    }
}
