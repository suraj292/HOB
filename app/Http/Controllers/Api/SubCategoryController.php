<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategory = ProductSubCategory::all();

        return response([
           'data' => $subCategory
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
        $request->validate([
            'product_sub_category_name' => 'required|unique:product_sub_categories,product_sub_category_name',
            'tags' => 'nullable',
            'alt' => 'nullable',
            'banner' => 'required|image'
        ]);
        $category = ProductCategory::find($request->product);
        $banner = $request->banner->store('ProductBanner');
        $subCategory = ProductSubCategory::create([
            'product_category_id' => $category->id,
            'product_category_name' => $category->category_name,
            'product_sub_category_name' => $request->product_sub_category_name,
            'tags' => $request->tags,
            'alt' => $request->alt,
            'banner' => 'storage/'.$banner
        ]);

        return response([
           'data' => $subCategory,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subCategory = ProductSubCategory::find($id);

        return response([
           'data' => $subCategory
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
        $data = $request->validate([
            'product_sub_category_name' => 'required|unique:product_sub_categories,product_sub_category_name,'.$id,
            'tags' => 'nullable',
            'alt' => 'nullable',
            'banner' => 'nullable|image'
        ]);
        $subCategory = ProductSubCategory::find($id);
        if ($request->hasFile('banner')) {
            $banner = $request->banner->store('ProductBanner');
            $data['banner'] = 'storage/'.$banner;
        }
        $subCategory->update($data);
        return response([
           'message' => 'Sub Category has been update.',
           'data' => $data,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategory = ProductSubCategory::find($id);
        $subCategory->delete();

        return response([
           'message' => 'Sub Category has been deleted',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function subCategoryWhere($id)
    {
        $subCategory = ProductSubCategory::where('product_category_id', $id)->get();

        return response([
           'subCategory' => $subCategory,
        ]);
    }
}
