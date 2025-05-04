<?php
namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;

class UserController2 extends \App\Http\Controllers\Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only('name', 'email'));

        return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui.');
    }

    public function products()
    {
        $products = Product::latest()->get();
        return view('user.products', compact('products'));
    }

    public function productDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('user.product-detail', compact('product'));
    }

    public function gallery()
    {
        $products = Product::select('image', 'name', 'description', 'id')->get();
        return view('user.gallery', compact('products'));
    }

    public function contact()
    {
        return view('user.contact');
    }
}
