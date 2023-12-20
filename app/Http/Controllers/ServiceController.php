<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(3);
        $myProfile = User::find(Auth::user()->id)->Profile;
        return view('service.index', compact('myProfile', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myProfile = User::find(Auth::user()->id)->Profile;
        $categories=Category::all();
        return view('service.create', compact('myProfile','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'picture' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'features' => 'nullable',
        ]);
        if ($request->hasFile($request->input('picture'))) {
            $service = new Service();
            $file = $request->file('picture');
            $extension  = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('users/services', $fileName);
            $validated['user_id']=auth()->user()->id;
            $validated['picture']= $fileName;
            $service->fill($validated)->save();   
            return redirect()->back()->with('success', 'New Service Created successfully');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $service = Service::find($id);
        $myProfile = User::find(Auth::user()->id)->Profile;
        return view('service.edit', compact('service', 'myProfile','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'picture' => 'nullable',
            'price'=>'nullable',
            'features' => 'nullable',

        ]);
        $service = Service::find($request->id);
        if ($request->hasFile('picture')) {
            if (!empty($service->picture)) {
                $previousPicturePath = public_path('users/services/' . $service->picture);
                if (file_exists($previousPicturePath)) {
                    unlink($previousPicturePath);
                }
            }
        
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('users/services', $fileName);
        
            $validated['picture'] = $fileName;
        }
        
        $service->fill($validated)->save();


        return redirect()->route('service-index')->with('success', 'New Service Created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if (!empty($service->picture)) {
            $previousPicturePath = public_path('users/services/' . $service->picture);
            if (file_exists($previousPicturePath)) {
                unlink($previousPicturePath);
            }
        }
        $service->delete();
        return response()->json([
            'status' => true,
            'success' => 'Service deleted successfully',
        ]);
    }
}
