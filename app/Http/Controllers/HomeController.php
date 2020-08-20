<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::paginate(5);
        return view('items.index', ['items' => $items]);
    }
    public function create()
    {
        return view('items.create');
    }

    public function store()
    {
        $this->validate(request(), [
            "name" => 'required|min:3',
            "quantity" => 'required',
            "rate" => 'required',
            "category" => 'required|min:3',
            "date" => 'required|date',
        ]);

        $input = [
            'name' => request('name'),
            'quantity' => request('quantity'),
            'rate' => request('rate'),
            'category' => request('category'),
            'added_date' => request('date'),
        ];
        if (Item::create($input)) {
            return redirect('/home')->with('success', 'Added Successfully');
        } else {
            return back()->with('error', 'Failed to add');
        }
        return back();
    }

    public function destroy(Item $item)
    {
        if ($item->delete()) {
            return back()->with('success', 'Deleted Successfully');
        }
    }
    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }
    public function update(Item $item)
    {
        $this->validate(request(), [
            "name" => 'required|min:3',
            "quantity" => 'required',
            "rate" => 'required',
            "category" => 'required|min:3',
            "date" => 'required|date',
        ]);
        $update = [
            'name' => request('name'),
            'quantity' => request('quantity'),
            'rate' => request('rate'),
            'category' => request('category'),
            'added_date' => request('date'),
        ];
        if ($item->update($update)) {
            return redirect('/home')->with('success', 'Updated Successfully');
        } else {
            return redirect('/home')->with('error', 'Could not be updated');
        }
    }
}
