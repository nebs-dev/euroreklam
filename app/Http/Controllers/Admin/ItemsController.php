<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\FileUploader;
use App\Http\Requests\ItemRequest;
use App\Item;
use App\Repositories\ItemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller {

    protected $itemRepo;

    public function __construct(ItemRepository $itemRepo) {
        $this->itemRepo = $itemRepo;
    }

    public function index(Request $request) {
        $params = $request->all();
        $items = $this->itemRepo->search($params);
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
            $item = new Item($input);
            $item->save();

            $item = FileUploader::upload($request, $item, 'klime', 'slika');

            flash()->success('Success', 'Item successfully created');
            return redirect()->route('admin_items_show', compact('item'));

        } catch (\Exception $e) {
            flash()->error('Error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item) {
        //
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
        $params = array_filter($request->all(), 'strlen');
        $item->update($params);

        if ($request->hasFile('slika')) {
            $file = $request->file('slika');
            $ext = $file->guessClientExtension();
            $path = $file->storeAs('klime', "image_{$item->id}.{$ext}");
            $item->slika = 'storage/' . $path;
            $item->save();
        }

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
        //
    }

}
