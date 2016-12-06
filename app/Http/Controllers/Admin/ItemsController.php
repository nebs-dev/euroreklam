<?php

namespace App\Http\Controllers\Admin;

use App\Item;
use App\Repositories\ItemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

}
