<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category as CategoryModel;
use App\Models\Book as BookModel;
use App\Models\BookDetail as BookDetailModel;


class PageController extends Controller
{
    public function viewHome(){
        $book = BookModel::simplePaginate(5);
        return view('pages.home', ['b'=>$book]);
    }

    public function viewFiction(CategoryModel $category){
        $category=CategoryModel::with('books')->get();
        return view('pages.fiction', ['cat'=> $category]);
    }

    public function viewScience(CategoryModel $category){
        $category=CategoryModel::with('books')->get();
        return view('pages.science', ['cat'=> $category]);
    }

    public function viewComputer(CategoryModel $category){
        $category=CategoryModel::with('books')->get();
        return view('pages.computer', ['cat'=> $category]);
    }

    public function viewBookDetail(){
        $book=BookModel::with('bookdetail')->get();
        $bd = BookDetailModel::all();
        return view('pages.detail', ['bookdetail'=>$book, 'bookd'=>$bd]);
    }
}
