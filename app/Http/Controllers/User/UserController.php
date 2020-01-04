<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;

class UserController extends Controller
{
    protected $user;
    protected $property;

    public function __construct(
        User $user,
        Property $property
    ) {
        $this->user = $user;
        $this->property = $property;
    }

    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->id != $request['id']) {
            return redirect('/');
        }
        return view('user.profile.profile');
    }

    public function userProperty(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->id != $request['id']) {
            return redirect('/');
        }

        $listProperty = $this->property->where('user_id', Auth::user()->id)->get();
        return view('user.profile.list-property', compact([
            'listProperty',
        ]));
    }

    public function deleteProperty(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->id != $request['id']) {
            return redirect('/');
        }
        $deleted = $this->property->whereId($request['propertyId'])->first();
        if ($deleted['user_id'] != Auth::user()->id) { 
            return redirect()->route('user.property', $request['id']);
        }
        $this->property->whereId($request['propertyId'])->delete();
        $listProperty = $this->property->where('user_id', Auth::user()->id)->get();
        return redirect()->route('user.property', $request['id']);
    }
}
