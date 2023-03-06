<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryResource;
use App\Models\Brand;
use App\Models\Category;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GeneralRequestController extends Controller
{
    use ResponseTrait;
    public function categories(): JsonResponse {
        return $this->returnData('categories', CategoryResource::collection(Category::get()));
    }

    public function searchCategories(Request $request): JsonResponse
    {
        return $this->returnData('categories', CategoryResource::collection(Category::where('name', 'LIKE', '%' . $request->key . '%')->get()));
    }

    public function brands(): JsonResponse
    {
        return $this->returnData('brands', BrandResource::collection(Brand::get()));
    }

    public function searchBrands(Request $request): JsonResponse
    {
        return $this->returnData('brands', BrandResource::collection(Brand::where('name', 'LIKE', '%' . $request->key . '%')->get()));
    }
}
