<?php

namespace App\Http\Controllers;

use App\Repositories\ItemRepository;
use App\Item;
use Illuminate\Http\Request;

class FrontendController extends Controller {

    protected $itemRepo;

    public function __construct(ItemRepository $itemRepo) {
        $this->itemRepo = $itemRepo;
    }

    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $items = $this->itemRepo->getDiscountItems(true);
        $items = $items->shuffle()->slice(0, 10);

        return view('frontend/home', compact('items'));
    }

    /**
     * Show klime page
     * @param  Request $request 
     * @return \Illuminate\Http\Response
     */
    public function klime(Request $request) {        
        $items = $this->itemRepo->getAll($request->all());

        return view('frontend/klime', compact('items'));
    }
    
    
    public function klima(Item $item) {
        return view('frontend/klima', compact('item'));
    }

    public function kontakt() {
        return view('frontend/kontakt');
    }

    public function o_nama() {
        return view('frontend/o_nama');
    }
}
