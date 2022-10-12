<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function on_page_seo($title, $description)
    {
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('frontend/assets/images/main.webp'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // seo
        $this->on_page_seo('Category', 'Category');
        $categories = Category::orderBy('auto_code', 'asc')->get();
        return view('backend.category.index', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|max:255',
            'name_bn' => 'string |max:255'
        ]);

        $parent_id = $request->parent;
        $oldParentId = Category::where('parent_id', $parent_id)->first();
        $auto_code = '';
        if ($parent_id == NULL) {
            $oldParentId = Category::select('auto_code')->where('parent_id', null)->orderBy('auto_code', 'desc')->first();
            if (!empty($oldParentId)) {
                $auto_code = $oldParentId->auto_code + 100;
            } else {
                $auto_code = "100";
            }
        } else {
            if (!empty($oldParentId)) {
                // dd($oldParentId);
                $old_code = $oldParentId->auto_code;
                $last_code = substr($old_code, -3);
                $append_code = (int)$last_code + 1;
                $auto_code = substr($old_code, 0, -3) . "$append_code";
            } else {
                $parentData = Category::where('id', $parent_id)->first();
                $auto_code = $parentData->auto_code . "101";
            }
        }

        $category = new Category();
        $category->category_name = $request->name;
        $category->category_name_bn = $request->name_bn;
        $category->slug = Str::slug($request->name);
        $category->parent_id = $request->parent;
        $category->design = $request->page_design;
        $category->auto_code = $auto_code;
        $category->save();

        Toastr::success('Category Successfully Added', 'Success');
        return redirect()->back();

    }

    public function edit(Category $category)
    {
        // seo
        $this->on_page_seo('Edit Category', 'Edit Category');
        $categories = Category::orderBy('auto_code', 'asc')->get();
        return view('backend.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'string|required|max:255'
        ]);

        $updateId = $id;
        $parent_id = $request->parent;
        $oldParentId = Category::where('parent_id', $parent_id)->first();
        $auto_code = '';
        $category = Category::findOrFail($updateId);

        if ($parent_id == NULL) {
            $auto_code = $category->auto_code;
        } else {
            if (!empty($oldParentId)) {

                $old_code = $oldParentId->auto_code;
                $last_code = substr($old_code, -3);
                $append_code = (int)$last_code + 1;
                $auto_code = substr($old_code, 0, -3) . "$append_code";
            } else {
                $parentData = Category::where('id', $parent_id)->first();
                $auto_code = $parentData->auto_code . "101";
            }
        }


        $category->category_name = $request->name;
        $category->category_name_bn = $request->name_bn;
        // Check slug
        if ($category->slug != Str::slug($request->name)) {
            $category->slug = Str::slug($request->name);
        }

        $category->parent_id = $request->parent;
        $category->auto_code = $auto_code;
        $category->slug = Str::slug($request->name);
        $category->design = $request->categoryDesign;
        $category->status = $request->status;
        $category->update();

        Toastr::success('Category Successfully Updated', 'Success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Toastr::success('Category Successfully Deleted', 'Success');
        return redirect()->back();
    }
}
