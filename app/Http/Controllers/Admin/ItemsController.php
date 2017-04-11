<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\FileUploader;
use App\Http\Requests\ItemRequest;
use App\Item;
use App\Repositories\ItemRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ItemsController extends Controller {

    protected $itemRepo;

    public function __construct(ItemRepository $itemRepo) {
        $this->itemRepo = $itemRepo;
    }

    public function index(Request $request) {
        $params = $request->all();
        $items  = $this->itemRepo->search($params);
        return view('backend/items/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::all();
        return view('backend/items/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ItemRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request) {
        try {
            $input = array_filter($request->all(), 'strlen');
            $item  = new Item($input);
            $item->save();

            $item = FileUploader::upload($request, $item, 'klime', 'slika');

            flash()->success('Success', 'Item successfully created');
            return redirect()->route('admin_items_list');

        } catch (\Exception $e) {
            flash()->error('Error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item) {
        $categories = Category::all();
        return view('backend/items/edit', compact('categories', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ItemRequest $request
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, Item $item) {
        // $params = array_filter($request->all(), 'strlen');        
        $item->update($request->all());                

        $item = FileUploader::upload($request, $item, 'klime', 'slika');

        flash()->success('Success', 'Item successfully updated');
        return redirect()->route('admin_items_edit', compact('item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item) {
        try {
            $item->delete();
            flash()->success('Success', 'Item successfully deleted');

        } catch (\Exception $e) {
            flash()->error('Error', $e->getMessage());

        }

        return redirect()->route('admin_items_list');
    }

}
