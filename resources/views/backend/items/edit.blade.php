@extends('backend.layouts.main-admin')

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit {{ $item->name }}</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit item
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <form method="POST" action="{{ route('admin_items_update', $item->id) }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="PUT"/>

                            <img src="{{ asset($item->slika) }}" width="200" >

                            <div class="form-group">
                                <label>Slika</label>
                                <input type="file" id="slika" name="slika" class="form-control">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Naziv</label>
                                <input id="naziv" name="naziv" class="form-control" placeholder="Naziv"
                                       value="{{ $item->naziv }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Kategorija</label>
                                <select id="category_id" name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option {{ ($item->category_id == $category->id ? "selected":"") }} value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Opis</label>
                                <textarea id="opis" name="opis" class="form-control"
                                          rows="6">{{ $item->opis }}</textarea>
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Cijena PDV</label>
                                <input id="cijena_pdv" name="cijena_pdv" class="form-control" placeholder="Cijena PDV"
                                       value="{{ $item->cijena_pdv }}">
                            </div>

                            <div class="form-group">
                                <label>Cijena s popustom</label>
                                <input id="cijena_popust" name="cijena_popust" class="form-control"
                                       placeholder="Cijena s popustom"
                                       value="{{ $item->cijena_popust }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Energetska klasa</label>
                                <select id="en_klasa" name="en_klasa" class="form-control">
                                    <option {{ ($item->en_klasa == 'A+++' ? "selected":"") }} value="A+++">A+++</option>
                                    <option {{ ($item->en_klasa == 'A++' ? "selected":"") }} value="A++">A++</option>
                                    <option {{ ($item->en_klasa == 'A+' ? "selected":"") }} value="A+">A+</option>
                                    <option {{ ($item->en_klasa == 'A' ? "selected":"") }} value="A">A</option>
                                    <option {{ ($item->en_klasa == 'B+' ? "selected":"") }} value="B+">B+</option>
                                    <option {{ ($item->en_klasa == 'B' ? "selected":"") }} value="B">B</option>
                                    <option {{ ($item->en_klasa == 'C' ? "selected":"") }} value="C">C</option>
                                    <option {{ ($item->en_klasa == 'D' ? "selected":"") }} value="D">D</option>
                                    <option {{ ($item->en_klasa == 'E' ? "selected":"") }} value="E">E</option>
                                </select>
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Kapacitet hladjenja (KW)</label>
                                <input id="kapacitet_hladjenja" name="kapacitet_hladjenja" class="form-control"
                                       placeholder="Kapacitet hladjenja" value="{{ $item->kapacitet_hladjenja }}">
                            </div>

                            <div class="form-group">
                                <label>Kapacitet grijanja (KW)</label>
                                <input id="kapacitet_grijanja" name="kapacitet_grijanja" class="form-control"
                                       placeholder="Kapacitet grijanja" value="{{ $item->kapacitet_grijanja }}">
                            </div>

                            <div class="form-group">
                                <label>Rashladno sredstvo</label>
                                <input id="rashladno_sredstvo" name="rashladno_sredstvo" class="form-control"
                                       placeholder="Rashladno sredstvo" value="{{ $item->rashladno_sredstvo }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Prikljucak elekstricne energije hladjenje (W)</label>
                                <input id="prikljucak_el_energije_hladjenje" name="prikljucak_el_energije_hladjenje"
                                       class="form-control"
                                       placeholder="Prikljucak elekstricne energije hladjenje"
                                       value="{{ $item->prikljucak_el_energije_hladjenje }}">
                            </div>

                            <div class="form-group">
                                <label>Prikljucak elekstricne energije grijanje (W)</label>
                                <input id="prikljucak_el_energije_grijanje" name="prikljucak_el_energije_grijanje"
                                       class="form-control"
                                       placeholder="Prikljucak elekstricne energije grijanje"
                                       value="{{ $item->prikljucak_el_energije_grijanje }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">EER (W)</label>
                                <input id="eer" name="eer" class="form-control"
                                       placeholder="EER" value="{{ $item->eer }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">COP (W)</label>
                                <input id="cop" name="cop" class="form-control"
                                       placeholder="COP" value="{{ $item->cop }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Odvlazivanje</label>
                                <select id="odvlazivanje" name="odvlazivanje" class="form-control">
                                    <option {{ ($item->odvlazivanje == 'da' ? "selected":"") }} value="da">Da</option>
                                    <option {{ ($item->odvlazivanje == 'ne' ? "selected":"") }} value="ne">Ne</option>
                                </select>
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Napajanje (ph-V-Hz)</label>
                                <input id="napajanje" name="napajanje" class="form-control"
                                       placeholder="Napajanje" value="{{ $item->napajanje }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Buka unutarnje jedinice (dB(A))</label>
                                <input id="buka_un_jedinice" name="buka_un_jedinice" class="form-control"
                                       placeholder="Buka unutarnje jedinice" value="{{ $item->buka_un_jedinice }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Buka vanjske jedinice (dB(A))</label>
                                <input id="buka_vanj_jedinice" name="buka_vanj_jedinice" class="form-control"
                                       placeholder="Buka vanjske jedinice" value="{{ $item->buka_vanj_jedinice }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Dimenzije unutarnje jedinice - ŠxVxD (mm)</label>
                                <input id="dimenzije_un_jedinice" name="dimenzije_un_jedinice"
                                       class="form-control"
                                       placeholder="Dimenzije unutarnje jedinice"
                                       value="{{ $item->dimenzije_un_jedinice }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Dimenzije vanjske jedinice - ŠxVxD (mm)</label>
                                <input id="dimenzije_vanj_jedinice" name="dimenzije_vanj_jedinice" class="form-control"
                                       placeholder="Dimenzije vanjske jedinice"
                                       value="{{ $item->dimenzije_vanj_jedinice }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Tezina unutarnje jedinice (kg)</label>
                                <input id="tezina_un_jedinice" name="tezina_un_jedinice" class="form-control"
                                       placeholder="Tezina unutarnje jedinice" value="{{ $item->tezina_un_jedinice }}">
                            </div>

                            <div class="form-group">
                                <label>Tezina vanjske jedinice (kg)</label>
                                <input id="tezina_vanj_jedinice" name="tezina_vanj_jedinice" class="form-control"
                                       placeholder="Tezina vanjske jedinice" value="{{ $item->tezina_Vanj_jedinice }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Promjer cijevi tekuca faza (inch(mm))</label>
                                <input id="promjer_cijevi_tekuca" name="promjer_cijevi_tekuca" class="form-control"
                                       placeholder="Promjer cijevi tekuca faza"
                                       value="{{ $item->promjer_cijevi_tekuca }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Promjer cijevi plinska faza (inch(mm))</label>
                                <input id="promjer_cijevi_plinska" name="promjer_cijevi_plinska" class="form-control"
                                       placeholder="Promjer cijevi plinska faza"
                                       value="{{ $item->promjer_cijevi_plinska }}">
                            </div>

                            <div class="form-group">
                                <label>Maksimalna duljina cjevovoda (m)</label>
                                <input id="max_duljina_cjevovoda" name="max_duljina_cjevovoda" class="form-control"
                                       placeholder="Maksimalna duljina cjevovoda"
                                       value="{{ $item->max_duljina_cjevovoda }}">
                            </div>

                            <div class="form-group">
                                <label>Maksimalna visinska razlika (m)</label>
                                <input id="max_visinska_razlika" name="max_visinska_razlika" class="form-control"
                                       placeholder="Maksimalna visinska razlika"
                                       value="{{ $item->max_visinska_razlika }}">
                            </div>

                            <div class="form-group">
                                <label>Protok zraka unutarnja jedinica (m3/h)</label>
                                <input id="protok_zraka_unutarnja" name="protok_zraka_unutarnja" class="form-control"
                                       placeholder="Protok zraka unutarnja jedinica"
                                       value="{{ $item->protok_zraka_unutarnja }}">
                            </div>

                            <div class="form-group">
                                <label>Protok zraka vanjska jedinica (m3/h)</label>
                                <input id="protok_zraka_vanjska" name="protok_zraka_vanjska" class="form-control"
                                       placeholder="Protok zraka vanjska jedinica"
                                       value="{{ $item->protok_zraka_vanjska }}">
                            </div>

                            <div class="form-group">
                                <label>Raspolozivi pad tlaka (Pa)</label>
                                <input id="raspolozivi_pad_tlaka" name="raspolozivi_pad_tlaka" class="form-control"
                                       placeholder="Raspolozivi pad tlaka" value="{{ $item->raspolozivi_pad_tlaka }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Jamstvo</label>
                                <select id="jamstvo" name="jamstvo" class="form-control">
                                    <option {{ ($item->jamstvo == 1 ? "selected":"") }} value="1">1 godina</option>
                                    <option {{ ($item->jamstvo == 2 ? "selected":"") }} value="2">2 godine</option>
                                    <option {{ ($item->jamstvo == 3 ? "selected":"") }} value="3">3 godine</option>
                                    <option {{ ($item->jamstvo == 4 ? "selected":"") }} value="4">4 godine</option>
                                    <option {{ ($item->jamstvo == 5 ? "selected":"") }} value="5">5 godina</option>
                                    <option {{ ($item->jamstvo == 6 ? "selected":"") }} value="6">6 godina</option>
                                    <option {{ ($item->jamstvo == 7 ? "selected":"") }} value="7">7 godina</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>SEER (W)</label>
                                <input id="seer" name="seer" class="form-control"
                                       placeholder="SEER" value="{{ $item->seer }}">
                            </div>

                            <div class="form-group">
                                <label>SCOP (W)</label>
                                <input id="scop" name="scop" class="form-control"
                                       placeholder="SCOP" value="{{ $item->scop }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>

@stop

@section('js')
@stop
