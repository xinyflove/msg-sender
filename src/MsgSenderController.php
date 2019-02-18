<?php

namespace PeakXin\MsgSender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MsgSenderController extends Controller
{
    public function index()
    {
        return view('msg-sender::index');
    }
}
