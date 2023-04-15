<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(){
        $wish=Wishlist::all();
        return ($wish);
    }
        public function addToWishlist(Request $request){
        //     $user = User::find(Auth::id());
        //     $produit = array();
        //         [
        //                     'id' => $request->input()['id'],
        //                     'title' => $request->input()['title'],
        //                     'price' => $request->input()['price'],
        //                     'image' => $request->input()['image'],
        //                     //'image' => $request->input()['Qte'],  
                            
        //                 ]
           
            
        //     // $produit["user_id"] = $user->id;
        //     Wishlist::create($produit);
        //    return response()->json($produit) ;
     }
        public function deleteFromWishlist($id){
    
            Wishlist::find($id)->destroy();
            return ("deleted+1");
            
        }
}
