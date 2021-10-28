<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = SubCategory::get();
        
        return view('pages.dashboard.category.detail', [
            'subcategory' => $subcategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $categories = Category::findOrFail($id);
        return view('pages.dashboard.category.subcreate', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $data['photo'] = $request->file('photo')->store('assets/category','public');
        $data['slug'] = Str::slug($request->name);
        SubCategory::create($data);

        return redirect()->route('categories.show', $request->category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::findOrFail($id);

        return view('pages.dashboard.category.detail', [
            'subcategory' => $subcategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cateId, $id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::findOrFail($cateId);

        return view('pages.dashboard.category.subcreate', [
            'subcategory' => $subcategory,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = $request->all();
        
        // $data['photo'] = $request->file('photo')->store('assets/category','public');
        $data['slug'] = Str::slug($request->name);
        $item = SubCategory::find($id);
        $item->update($data);

        return redirect()->route('categories.show', $request->category_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data  = SubCategory::find($id);

        $data->delete();
        return back();
    }
}
