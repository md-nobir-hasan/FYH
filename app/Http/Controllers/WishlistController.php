<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWishlistRequest $request)
    {
        if($request->for == 'delete'){
            $wishlist = Wishlist::where('story_id',$request->id)->where('user_id',Auth::user()->id)->delete();
            if($wishlist){
                return response()->json($wishlist);
            }else{
                return false;
            }
        }else{

            $insert = Wishlist::create([
                    'user_id'=>Auth::user()->id,
                    'story_id'=> $request->id
                ]);
            if($insert){
                return response()->json($insert);
            }else{
                return false;
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {

    }
}
