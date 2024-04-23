<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function AllProductListByRemark(Request $request) {
        $remark = $request->remark;
        $productlist = ProductList::where('remark', $remark)->get();
        return $productlist;
    }

    public function AllProductListByCategory(Request $request) {
        $Category = $request->category;
        $productlist = ProductList::where('category', $Category)->get();
        return $productlist;
    }
    public function AllProductListBySubCategory(Request $request) {
        $Category = $request->category;
        $SubCategory = $request->subcategory;
        $productlist = ProductList::where('category', $Category)->where('subcategory', $SubCategory)->get();
        return $productlist;
    }
}
