<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $brands = Brand::paginate(10);
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        // validation
        $request->validate([
            'name'      => 'required|string|min:3|max:255',
            'image'     => 'file|mimes:png,jpg,jpeg,svg'
        ]);

        // TODO : task upload image using laravel intervention package
        // insert into db
        try {
            Brand::create([
                'name' => $request->name,
                'image' => $request->file('image')->store('brands')
            ]);
            // redirect to index page
            return redirect()->route('admin.brands.index')->with('success', 'category added successfully');
        } catch (\Exception $e) {
            // redirect to index page
            return redirect()->route('admin.brands.index')->with('error', $e->getMessage());
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id): View
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        // validation
        $request->validate([
            'name'      => 'required|string|min:3|max:255',
            'image'     => 'file|mimes:png,jpg,jpeg,svg'
        ]);

        // update into db
        $brand->name = $request->name;
        if ($request->hasFile('image')) {
            File::delete('uploads/'.$brand->image);
            $brand->image = $request->file('image')->store('brands');
        }

        $brand->save();

        // redirect to index page
        return redirect()->route('admin.brands.index')->with('success', 'brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    // TODO: task 2
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('admin.brands.index')->with('success', 'brand deleted successfully');
    }
}
