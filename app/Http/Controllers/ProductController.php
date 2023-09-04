<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
 
class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products';
        $viewData['products'] = Product::all();
        return view('product.index')->with('viewData',$viewData);
    }

    public function show(int $id): View
    {
      $viewData = [];
      $viewData['title'] = 'Product';
      $viewData['product'] = Product::findOrFail($id);
      return view('product.show')->with('viewData',$viewData);
    }

    public function create(): View
    {
      $viewData = [];
      $viewData['title'] = 'Create Product';
      return view('product.create')->with('viewData',$viewData);
    }

    public function save(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price'=> 'required'
      ]);
      
      Product::create($request->all());

      return redirect()->route('product.index')->with('success', 'New product saved successfully!');
    }

    public function destroy(int $id)
    {
      Product::destroy($id);
      return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
