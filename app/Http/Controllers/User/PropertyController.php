<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\Type;
use App\Models\Feature;
use App\Models\Province;

class PropertyController extends Controller
{
    protected $property;
    protected $type;
    protected $feature;
    protected $province;

    public function __construct(
        Property $property,
        Type $type,
        Feature $feature,
        Province $province
    ) {
        $this->property = $property;
        $this->type = $type;
        $this->feature = $feature;
        $this->province = $province;
    }

    public function create()
    {
        if (Auth::check()) {
            $type = $this->type->all();
            $feature = $this->feature->all();
            $province = $this->province->all();
            return view('user.property.create', compact([
                'type',
                'feature',
                'province',
            ]));
        }
        return redirect()->route('login');
    }

    public function store(Request $request)
    {
        $validated = $this->validation($request);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        $params = $this->getParams($request);
        $this->property->title = $params['title'];
        $this->property->slug_name = str_slug($params['title']);
        $this->property->area = $params['area'];
        $this->property->price = $params['price'];
        $this->property->feature_id = json_encode($params['feature_id']);
        $this->property->type_id = $params['type_id'];
        $this->property->province_id = $params['province_id'];
        $this->property->address = $params['address'];
        $this->property->user_id = Auth::user()->id;
        $this->property->description = $params['description'];
        if($request->hasfile('image'))
         {

            foreach($request->file('image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/property/', $name);  
                $data[] = $name;  
            }
         }
        $this->property->image = json_encode($data);
        $created = $this->property->save();
        if (!$created) {
            return redirect()->back()->withErrors($created)->withInput();
        }
        return redirect()->route('homepage');
    }

    public function getParams(Request $request)
    {
        return $request->only([
            'title',
            'type_id',
            'price',
            'area',
            'image',
            'province_id',
            'address',
            'description',
            'feature_id',
        ]);
    }

    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|string',
            'type_id' => 'required',
            'price' => 'required',
            'area' => 'required',
            'image' => 'required',
            'province_id' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);
    }
}
