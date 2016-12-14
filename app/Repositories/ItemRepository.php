<?php

namespace App\Repositories;

use App\Category;
use App\Item;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ItemRepository {

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll() {
        return Item::with('category')->paginate(10);
    }


    /**
     * @param $params
     * @return LengthAwarePaginator
     */
    public function search($params) {
        $sqlParams = [];
        $sql = "SELECT item.* FROM items item
                INNER JOIN categories cat ON cat.id = item.category_id ";

        # Title
        if (isset($params['title'])) {
            $sql .= "WHERE item.naziv LIKE :title OR cat.title LIKE :cat_title ";
            $sqlParams['title'] = '%'.$params['title'].'%';
            $sqlParams['cat_title'] = '%'.$params['title'].'%';
        }

        # Price sort
        if (isset($params['price_pdv'])) {
            $sql .= "ORDER BY item.cijena_pdv " . $params['price_pdv'];
        }

        $items = DB::select($sql, $sqlParams);

        $pageNumber = Input::get('page', 1);
        $perpage = 10;
        $slice = array_slice($items, $perpage * ($pageNumber - 1), $perpage);

        $items = new LengthAwarePaginator($slice, count($items), $perpage);

        foreach ($items as &$item) {
            $item->category = $this->getCategory($item);
        }

        $items->setPath('items');
        $queryString = array_except(Input::query(), $items->getPageName());
        $items->appends($queryString);
        return $items;
    }

    /**
     * @param bool|false $random
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public function getDiscountItems($random = false) {
        $query = Item::with('category')->whereNotNull('cijena_popust');

        if ($random) $query = $query->inRandomOrder();

        return $query->get();
    }

    /**
     * @param $item
     * @return mixed
     */
    private function getCategory($item) {
        return Category::where('id', $item->category_id)->first();
    }


}