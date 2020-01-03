<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    protected $property;

    public function __construct(Property $property)
    {
        $this->property = $property;
    }

    public function index()
    {
        $property = $this->property->orderBy('created_at', 'desc')->with('types')->paginate(12);
        return view('user.homepages.index', compact([
            'property'
        ]));
    }
}
