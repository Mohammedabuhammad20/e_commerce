<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;
use function Pest\Laravel\delete;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{

    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {

        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        toastr()->timeout(1000)->closeButton()->success('Your account has been suspended.');
        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->timeout(2000)->closeButton()->success('category delete Successfuly.');
        return redirect()->back();
    }


    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();
        toastr()->timeout(2000)->closeButton()->success('category Edit Successfuly.');
        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {

        $data =  new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $data->image = $imagename;
        }


        $data->save();
        toastr()->timeout(2000)->closeButton()->success('Product Added  Successfuly.');
        return redirect()->back();
    }

    public function view_product()
    {
        $product = Product::paginate(4);
        return view('admin.view_product', compact('product'));
    }
    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        toastr()->timeout(2000)->closeButton()->success('Product delete Successfuly.');
        return redirect()->back();
    }

    public function update_product($slug)
    {
        $category = Category::all();
        $data = Product::where('slug', $slug)->get()->first();

        return view('admin.update_product', compact('data', 'category'));
    }
    public function edit_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        toastr()->timeout(2000)->closeButton()->success('Product Edit Successfuly.');
        return redirect('/view_product');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $product = Product::where('title', 'LIKE', '%' . $search . '%')->orWhere('category', 'LIKE', '%' . $search . '%')->paginate(3);
        return view('admin.view_product', compact('product'));
    }

    public function view_orders()
    {
        $data =  Order::all();
        return view('admin.view_orders', compact('data'));
    }

    public function on_the_way($id)
    {
        $data = Order::find($id);
        $data->status = 'on the way';
        $data->save();
        return redirect('/view_orders');
    }

    public function delivered($id)
    {

        $data = Order::find($id);
        $data->status = 'delivered';
        $data->save();

        return redirect('view_orders');
    }

    public function print_pdf($id)
    {
        $data = Order::find($id);
        $pdf = Pdf::loadView('admin.invoice', compact('data'));
        return $pdf->download('invice.pdf');
    }
}
