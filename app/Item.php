<?php

namespace App;

use App\Http\Requests\ItemRequest;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;

class Item extends Model {


    protected $fillable = [
        'naziv',
        'category_id',
        'opis',
        'cijena_pdv',
        'cijena_popust',
        'en_klasa',
        'kapacitet_hladjenja',
        'kapacitet_grijanja',
        'rashladno_sredstvo',
        'prikljucak_el_energije_hladjenje',
        'prikljucak_el_energije_grijanje',
        'eer',
        'cop',
        'odvlazivanje',
        'napajanje',
        'buka_un_jedinice',
        'buka_vanj_jedinice',
        'dimenzije_un_jedinice',
        'dimenzije_vanj_jedinice',
        'tezina_un_jedinice',
        'tezina_vanj_jedinice',
        'promjer_cijevi_tekuca',
        'promjer_cijevi_plinska',
        'max_duljina_cjevovoda',
        'max_visinska_razlika',
        'protok_zraka_unutarnja',
        'protok_zraka_vanjska',
        'raspolozivi_pad_tlaka',
        'jamstvo',
        'seer',
        'scop'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }


}
