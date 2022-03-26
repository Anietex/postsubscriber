<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function getWebsites(){
        $websites = Website::all();

        return $this->success($websites);
    }
}
