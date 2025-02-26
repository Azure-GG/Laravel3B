<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // Display the inventory table
    public function index()
    {
        $items = Inventory::all();
        return view('inventory.index', compact('items'));
    }

    // Delete an item from inventory
    public function destroy($id)
    {
        $item = Inventory::find($id);
        if ($item) {
            $item->delete();
        }
        return redirect()->route('inventory.index');
    }
}
