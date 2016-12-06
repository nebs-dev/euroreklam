<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
