<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;

class DashboardController extends Controller
{
    public function index(Request $request, $slug = null)
    {
        // $products = Product::with('category')->get(['id', 'name', 'price', 'slug']);
        $products = Product::with('tags')->paginate(20);
        $categories = Category::withCount('products')->get();
        $tags = Tag::withCount('products')->get();

        //SORTING
        $sorting = $request->sortingBy;
        switch ($sorting) {
            case 'GENDER':
                $sortField = 'quantity';
                $sortBy = 'asc';
                break;
            case 'GPA':
                $sortField = 'weight';
                $sortBy = 'desc';
                break;
            case 'YEAR':
                $sortField = 'year';
                $sortBy = 'desc';
                break;
            case 'NIM':
                $sortField = 'price';
                $sortBy = 'asc';
                break;
            default:
                $sortField = 'category_id';
                $sortBy = 'asc';
                break;
        }

        $products = Product::with('category');
        if (!is_null($slug)) {
            $category = Category::whereSlug($slug)->first();
            if (is_null($category->category_id)) {
                $categoriesIds = Category::whereCategoryId($category->id)->pluck('id')->toArray();
                $categoriesIds[] = $category->id;
                $products = $products->whereHas('category', function ($query) use ($categoriesIds) {
                    $query->whereIn('id', $categoriesIds);
                });
            } else {
                $products = Product::whereHas('category', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                });
            }
        }

        $products = $products->orderBy($sortField, $sortBy)->paginate(20);
        return view('admin.dashboard', compact('products', 'categories', 'tags', 'sorting'));
    }
}
