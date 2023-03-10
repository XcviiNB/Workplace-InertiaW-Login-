<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {

        $items = Item::orderBy('id')->with('office')->get();

        return inertia('Items', compact('items'));
    }
}
