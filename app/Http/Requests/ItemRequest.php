<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = [
//            'naziv' => 'required|unique:items',
            'category_id' => 'required|exists:categories,id',
            'opis' => 'required',
            'cijena_pdv' => 'required|numeric',
            'cijena_popust' => 'numeric',
            'en_klasa' => 'required',
            'kapacitet_hladjenja' => 'required',
            'prikljucak_el_energije_hladjenje' => 'required',
            'eer' => 'required',
            'cop' => 'required',
            'odvlazivanje' => 'required',
            'napajanje' => 'required',
            'buka_un_jedinice' => 'required',
            'buka_vanj_jedinice' => 'required',
            'dimenzije_un_jedinice' => 'required',
            'dimenzije_vanj_jedinice' => 'required',
            'tezina_un_jedinice' => 'required',
            'promjer_cijevi_tekuca' => 'required',
            'promjer_cijevi_plinska' => 'required',
            'max_duljina_cjevovoda' => 'integer',
            'max_visinska_razlika' => 'integer',
            'seer' => 'numeric',
            'scop' => 'numeric',
            'jamstvo' => 'required|integer',
        ];

        if ($this->method() == 'POST') {
            $rules['naziv'] = 'required|unique:items';
        }

        return $rules;
    }
}