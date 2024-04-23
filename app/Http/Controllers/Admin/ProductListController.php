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
}
