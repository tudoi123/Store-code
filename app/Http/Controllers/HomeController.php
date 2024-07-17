<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import Product model hoặc model tương ứng

class HomeController extends Controller
{
    public function index(){
        // Lấy danh sách sản phẩm từ cơ sở dữ liệu, bạn cần thay thế phần này bằng cách lấy dữ liệu từ cơ sở dữ liệu của bạn.
        $productUser = Product::all(); // Ví dụ, lấy tất cả sản phẩm từ bảng Products

        // Truyền biến $productUser vào view 'home'
        return view('home', ['productUser' => $productUser]);
    }
}

