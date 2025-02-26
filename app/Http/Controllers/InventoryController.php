<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory; // ✅ Import the Inventory model

class InventoryController extends Controller
{
    public function index()
    {
        $items = Inventory::all();
        return view('inventory.index', compact('items'));
    }

    public function destroy($id)
    {
        $item = Inventory::find($id);
        if ($item) {
            $item->delete();
        }
        return redirect()->route('inventory.index');
    }
}
