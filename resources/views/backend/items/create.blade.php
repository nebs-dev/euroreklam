@extends('backend.layouts.main-admin')

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Create new item</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New item
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <form method="POST" action="{{ route('admin_items_store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="POST"/>
                            
                            <div class="form-group">
                                <label>Slika</label>
                                <input type="file" id="slika" name="slika" class="form-control">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Naziv</label>
                                <input id="naziv" name="naziv" class="form-control" placeholder="Naziv"
                                       value="{{ old('naziv') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Kategorija</label>
                                <select id="category_id" name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option {{ (old("category_id") == $category->id ? "selected":"") }} value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Opis</label>
                                <textarea id="opis" name="opis" class="form-control" rows="6">{{ old('opis') }}</textarea>
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Cijena PDV</label>
                                <input id="cijena_pdv" name="cijena_pdv" class="form-control" placeholder="Cijena PDV"
                                       value="{{ old('cijena_pdv') }}">
                            </div>

                            <div class="form-group">
                                <label>Cijena s popustom</label>
                                <input id="cijena_popust" name="cijena_popust" class="form-control"
                                       placeholder="Cijena s popustom"
                                       value="{{ old('cijena_popust') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Energetska klasa</label>
                                <select id="en_klasa" name="en_klasa" class="form-control">
                                    <option {{ (old("en_klasa") == 'A++/A+++' ? "selected":"") }} value="A++/A+++">A++/A+++</option>
                                    <option {{ (old("en_klasa") == 'A++/A+' ? "selected":"") }} value="A++/A+">A++/A+</option>
                                    <option {{ (old("en_klasa") == 'A+++' ? "selected":"") }} value="A+++">A+++</option>
                                    <option {{ (old("en_klasa") == 'A++' ? "selected":"") }} value="A++">A++</option>
                                    <option {{ (old("en_klasa") == 'A+' ? "selected":"") }} value="A+">A+</option>
                                    <option {{ (old("en_klasa") == 'A' ? "selected":"") }} value="A">A</option>
                                    <option {{ (old("en_klasa") == 'B+' ? "selected":"") }} value="B+">B+</option>
                                    <option {{ (old("en_klasa") == 'B' ? "selected":"") }} value="B">B</option>
                                    <option {{ (old("en_klasa") == 'C' ? "selected":"") }} value="C">C</option>
                                    <option {{ (old("en_klasa") == 'D' ? "selected":"") }} value="D">D</option>
                                    <option {{ (old("en_klasa") == 'E' ? "selected":"") }} value="E">E</option>
                                </select>
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Kapacitet hladjenja (KW)</label>
                                <input id="kapacitet_hladjenja" name="kapacitet_hladjenja" class="form-control"
                                       placeholder="Kapacitet hladjenja" value="{{ old('kapacitet_hladjenja') }}">
                            </div>

                            <div class="form-group">
                                <label>Kapacitet grijanja (KW)</label>
                                <input id="kapacitet_grijanja" name="kapacitet_grijanja" class="form-control"
                                       placeholder="Kapacitet grijanja" value="{{ old('kapacitet_grijanja') }}">
                            </div>

                            <div class="form-group">
                                <label>Rashladno sredstvo</label>
                                <input id="rashladno_sredstvo" name="rashladno_sredstvo" class="form-control"
                                       placeholder="Rashladno sredstvo" value="{{ old('rashladno_sredstvo') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Prikljucak elekstricne energije hladjenje (W)</label>
                                <input id="prikljucak_el_energije_hladjenje" name="prikljucak_el_energije_hladjenje"
                                       class="form-control"
                                       placeholder="Prikljucak elekstricne energije hladjenje" value="{{ old('prikljucak_el_energije_hladjenje') }}">
                            </div>

                            <div class="form-group">
                                <label>Prikljucak elekstricne energije grijanje (W)</label>
                                <input id="prikljucak_el_energije_grijanje" name="prikljucak_el_energije_grijanje"
                                       class="form-control"
                                       placeholder="Prikljucak elekstricne energije grijanje" value="{{ old('prikljucak_el_energije_grijanje') }}">
                            </div>                                                        

                            <div class="form-group required">
                                <label class="control-label">Napajanje (ph-V-Hz)</label>
                                <input id="napajanje" name="napajanje" class="form-control"
                                       placeholder="Napajanje" value="{{ old('napajanje') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Buka unutarnje jedinice (dB(A))</label>
                                <input id="buka_un_jedinice" name="buka_un_jedinice" class="form-control"
                                       placeholder="Buka unutarnje jedinice" value="{{ old('buka_un_jedinice') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Buka vanjske jedinice (dB(A))</label>
                                <input id="buka_vanj_jedinice" name="buka_vanj_jedinice" class="form-control"
                                       placeholder="Buka vanjske jedinice" value="{{ old('buka_vanj_jedinice') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Dimenzije unutarnje jedinice - ŠxVxD (mm)</label>
                                <input id="dimenzije_un_jedinice" name="dimenzije_un_jedinice"
                                       class="form-control"
                                       placeholder="Dimenzije unutarnje jedinice" value="{{ old('dimenzije_un_jedinice') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Dimenzije vanjske jedinice - ŠxVxD (mm)</label>
                                <input id="dimenzije_vanj_jedinice" name="dimenzije_vanj_jedinice" class="form-control"
                                       placeholder="Dimenzije vanjske jedinice" value="{{ old('dimenzije_vanj_jedinice') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Tezina unutarnje jedinice (kg)</label>
                                <input id="tezina_un_jedinice" name="tezina_un_jedinice" class="form-control"
                                       placeholder="Tezina unutarnje jedinice" value="{{ old('tezina_un_jedinice') }}">
                            </div>

                            <div class="form-group">
                                <label>Tezina vanjske jedinice (kg)</label>
                                <input id="tezina_vanj_jedinice" name="tezina_vanj_jedinice" class="form-control"
                                       placeholder="Tezina vanjske jedinice" value="{{ old('tezina_Vanj_jedinice') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Promjer cijevi tekuca faza (inch(mm))</label>
                                <input id="promjer_cijevi_tekuca" name="promjer_cijevi_tekuca" class="form-control"
                                       placeholder="Promjer cijevi tekuca faza" value="{{ old('promjer_cijevi_tekuca') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Promjer cijevi plinska faza (inch(mm))</label>
                                <input id="promjer_cijevi_plinska" name="promjer_cijevi_plinska" class="form-control"
                                       placeholder="Promjer cijevi plinska faza" value="{{ old('promjer_cijevi_plinska') }}">
                            </div>

                            <div class="form-group">
                                <label>Maksimalna duljina cjevovoda (m)</label>
                                <input id="max_duljina_cjevovoda" name="max_duljina_cjevovoda" class="form-control"
                                       placeholder="Maksimalna duljina cjevovoda" value="{{ old('max_duljina_cjevovoda') }}">
                            </div>

                            <div class="form-group">
                                <label>Maksimalna visinska razlika (m)</label>
                                <input id="max_visinska_razlika" name="max_visinska_razlika" class="form-control"
                                       placeholder="Maksimalna visinska razlika" value="{{ old('max_visinska_razlika') }}">
                            </div>

                            <div class="form-group">
                                <label>Protok zraka unutarnja jedinica (m3/h)</label>
                                <input id="protok_zraka_unutarnja" name="protok_zraka_unutarnja" class="form-control"
                                       placeholder="Protok zraka unutarnja jedinica" value="{{ old('protok_zraka_unutarnja') }}">
                            </div>

                            <div class="form-group">
                                <label>Protok zraka vanjska jedinica (m3/h)</label>
                                <input id="protok_zraka_vanjska" name="protok_zraka_vanjska" class="form-control"
                                       placeholder="Protok zraka vanjska jedinica" value="{{ old('protok_zraka_vanjska') }}">
                            </div>

                            <div class="form-group">
                                <label>Raspolozivi pad tlaka (Pa)</label>
                                <input id="raspolozivi_pad_tlaka" name="raspolozivi_pad_tlaka" class="form-control"
                                       placeholder="Raspolozivi pad tlaka" value="{{ old('raspolozivi_pad_tlaka') }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Područje rada hl./gr°C (Min~Max)</label>
                                <input id="podrucje_rada" name="podrucje_rada" class="form-control"
                                       placeholder="Područje rada hl./gr°C (Min~Max)" value="{{ old('podrucje_rada') }}">
                            </div>

                            <div class="form-group required">
                                <label class="control-label">Jamstvo</label>
                                <select id="jamstvo" name="jamstvo" class="form-control">
                                    <option {{ (old("jamstvo") == 1 ? "selected":"") }} value="1">1 godina</option>
                                    <option {{ (old("jamstvo") == 2 ? "selected":"") }} value="2">2 godine</option>
                                    <option {{ (old("jamstvo") == 3 ? "selected":"") }} value="3">3 godine</option>
                                    <option {{ (old("jamstvo") == 4 ? "selected":"") }} value="4">4 godine</option>
                                    <option {{ (old("jamstvo") == 5 ? "selected":"") }} value="5">5 godina</option>
                                    <option {{ (old("jamstvo") == 6 ? "selected":"") }} value="6">6 godina</option>
                                    <option {{ (old("jamstvo") == 7 ? "selected":"") }} value="7">7 godina</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Razina zvučne snage u.j. (dB(A))</label>
                                <input id="razina_zvucne_snage_u_j" name="razina_zvucne_snage_u_j" class="form-control"
                                       placeholder="Razina zvučne snage u.j. (dB(A))" value="{{ old('razina_zvucne_snage_u_j') }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Razina zvučnog tlaka u.j. (dB(A))</label>
                                <input id="razina_zvucnog_tlaka_u_j" name="razina_zvucnog_tlaka_u_j" class="form-control"
                                       placeholder="Razina zvučnog tlaka u.j. (dB(A))" value="{{ old('razina_zvucnog_tlaka_u_j') }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Razina zvučne snage v.j. (dB(A))</label>
                                <input id="razina_zvucne_snage_v_j" name="razina_zvucne_snage_v_j" class="form-control"
                                       placeholder="Razina zvučne snage v.j. (dB(A))" value="{{ old('razina_zvucne_snage_v_j') }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Razina zvučnog tlaka v.j. (dB(A))</label>
                                <input id="razina_zvucnog_tlaka_v_j" name="razina_zvucnog_tlaka_v_j" class="form-control"
                                       placeholder="Razina zvučnog tlaka v.j. (dB(A))" value="{{ old('razina_zvucnog_tlaka_v_j') }}">
                            </div>

                            <div class="form-group">
                                <label>SEER (W)</label>
                                <input id="seer" name="seer" class="form-control"
                                       placeholder="SEER" value="{{ old('seer') }}">
                            </div>

                            <div class="form-group">
                                <label>SCOP (W)</label>
                                <input id="scop" name="scop" class="form-control"
                                       placeholder="SCOP" value="{{ old('scop') }}">
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
