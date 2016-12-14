<?php

namespace App\Http\Controllers;

use App\Repositories\ItemRepository;

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

    public function klime() {
        $items = $this->itemRepo->getAll();

        return view('frontend/klime', compact('items'));
    }

    public function kontakt() {
        return view('frontend/kontakt');
    }

    public function o_nama() {
        return view('frontend/o_nama');
    }
}
