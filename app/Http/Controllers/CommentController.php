<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\Comment;
 
class CommentController extends Controller
{
    public function save(Request $request, int $id) : RedirectResponse
    {
      $request->validate([
        'description' => 'required',
      ]);

      $product = Product::findOrFail($id);

      Comment::create([
        'description' => $request->input('description'),
        'product_id' => $id
      ]);

      return redirect()->route('product.show', ['id' => $id])->with('success', 'Product comment made successfully!');
    }
}
