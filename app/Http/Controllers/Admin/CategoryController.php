<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.categories.create', compact('categories'));
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
            'parent_id' => 'nullable'
        ]);

        $image = $request->hasFile('image') ? $request->file('image')->store('categories') : null;
        // insert into db
        Category::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'image'     => $image
        ]);

        // redirect to index page
        return redirect()->route('admin.categories.index')->with('success', 'category added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id): View
    {
        $category = Category::findOrFail($id);
        $categories = Category::select('id', 'name')->where('id', '!=', $id)->get();
        return view('admin.categories.edit', compact('categories', 'category'));
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
        $category = Category::findOrFail($id);

        // validation
        $request->validate([
            'name'      => 'required|string|min:3|max:255',
            'parent_id' => 'nullable'
        ]);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        if ($request->hasFile('image')) {
            File::delete('uploads/'.$category->image);
            $category->image = $request->file('image')->store('categories');
        }
        // update into db
        $category->save();

        // redirect to index page
        return redirect()->route('admin.categories.index')->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    // TODO: task 2
    public function destroy($id)
    {
        //
    }
}
