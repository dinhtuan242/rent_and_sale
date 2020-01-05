<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Feature;

class HomeController extends Controller
{
    protected $property;
    protected $feature;

    public function __construct(
        Property $property,
        Feature $feature
    ) {
        $this->property = $property;
        $this->feature = $feature;
    }

    public function index()
    {
        $property = $this->property->orderBy('created_at', 'desc')->with('type', 'user')->paginate(12);
        $feature = $this->feature->all();
        return view('user.homepages.index', compact([
            'property',
            'feature',
        ]));
    }
}
