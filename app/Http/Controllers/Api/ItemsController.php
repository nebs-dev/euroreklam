<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ItemRepository;

class ItemsController extends Controller {

    protected $itemRepo;

    public function __construct(ItemRepository $itemRepo) {
        $this->itemRepo = $itemRepo;
    }

    public function random() {
        $items = $this->itemRepo->getDiscountItems(true);
        $items = $items->shuffle()->slice(0, 10);

        return $items;
    }

}
