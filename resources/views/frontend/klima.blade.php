@extends('frontend.layouts.main')

@section('content') 
    
    <div class="top_panel_title top_panel_style_1  title_present breadcrumbs_present scheme_original">
		<div class="top_panel_title_inner top_panel_inner_style_1  title_present_inner breadcrumbs_present_inner">
			<div class="content_wrap">
				<h1 class="page_title">{{ $item->naziv }}</h1>                
				<div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="/">Pocetna</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <a class="breadcrumbs_item" href="/">Klime</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">{{ $item->naziv }}</span>
                </div>
			</div>
		</div>
    </div>
    
    <div class="page_content_wrap page_paddings_yes">
		<div class="content_wrap main-block">
			<div class="content">
				<div class="itemscope post_item post_item_single post_featured_default post_format_standard post-76 post type-post status-publish format-standard has-post-thumbnail hentry category-components tag-air-conditioning tag-installation" itemscope="" itemtype="http://schema.org/Article">
					<div class="post_featured">
						<div class="post_thumb" data-image="images/image-7.jpg" data-title="Cleaning Materials and Lubricants Required for Maintenance Cisits">
							{{-- <a class="hover_icon hover_icon_view inited" href="images/image-7.jpg" rel="magnific"> --}}
                                <img width="1170" height="659" alt="{{ $item->description }}" src="{{ asset($item->slika) }}" itemprop="image">
                            {{-- </a> --}}
						</div>
					</div>

					<div class="post_content" itemprop="articleBody">
						<div class="post_info">
                                        
                            <h2 class="pull-left">            
								<span class="post_info_item post_info_posted icon-clock-empty"> 
                                    <a href="index.html" class="post_info_date date updated" itemprop="datePublished" content="2016-09-07 14:08:32">
                                        <a href="javascript:void(0)" class="post_info_date">
                                            @if($item->cijena_popust)
                                                <strike>{{ $item->cijena_pdv }} kn</strike>
                                            @else
                                                {{ $item->cijena_pdv }} kn
                                            @endif                                                                                                        
                                        </a>
                                        <a href="javascript:void(0)" class="post_info_date">
                                            {{ $item->cijena_popust }} {{ $item->cijena_popust ? 'kn' : '' }}
                                        </a>
                                    </a>
                                </span>									
                            </h2>
                            <h2 class="pull-left">
								<span class="post_info_item post_info_counters">
                                    <span class="post_counters_item post_counters_views icon-eye" >
                                        <span class="post_counters_number">{{ $item->category->title }}</span>
                                    </span>
								</span>
                            </h2>
                            
                            <div style="clear: both"></div>
                            
                            <p>
                                {{ $item->opis }}
                            </p>
						</div>
						
                        
                        <div class="full-width">
							<div class="column">
									<div class="wrapper">
										<div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
										<h2 class="sc_title sc_title_regular">Tehnički podaci</h2>
										<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
											<div class="column-1_3 sc_column_item sc_column_item_1 odd first">
												<ul class="sc_list sc_list_style_iconed">
													<li class="sc_list_item"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Energetska klasa:  <strong>{{ $item->en_klasa }}</strong>
                                                    </li>
													<li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Kapacitet hladjenja (KW):  <strong>{{ $item->kapacitet_hladjenja }}</strong>
                                                    </li>
													<li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Kapacitet grijanja (KW):  <strong>{{ $item->kapacitet_grijanja }}</strong>
                                                    </li>
													<li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Rashladno sredstvo: <strong>{{ $item->rashladno_sredstvo }}</strong>
                                                    </li>
													<li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Prikljucak elekstricne energije hladjenje (W): <strong>{{ $item->prikljucak_el_energije_hladjenje }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Prikljucak elekstricne energije grijanje (W): <strong>{{ $item->prikljucak_el_energije_grijanje }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Jamstvo: <strong>{{ $item->jamstvo }} godina/e</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Razina zvučne snage u.j. (dB(A)): <strong>{{ $item->razina_zvucne_snage_u_j }}</strong>
                                                    </li>
                                                    <li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Razina zvučne snage u.j. (dB(A)): <strong>{{ $item->razina_zvucne_snage_v_j }}</strong>
                                                    </li>
												</ul>
											</div>
                                            <div class="column-1_3 sc_column_item sc_column_item_2 even">
												<ul class="sc_list sc_list_style_iconed">
													<li class="sc_list_item"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Napajanje (ph-V-Hz): <strong>{{ $item->napajanje }}</strong>
                                                    </li>
													<li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Buka unutarnje jedinice (dB(A)): <strong>{{ $item->buka_un_jedinice }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Buka vanjske jedinice (dB(A)): <strong>{{ $item->buka_vanj_jedinice }}</strong>
                                                    </li>
													<li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Dimenzije unutarnje jedinice - ŠxVxD (mm): <strong>{{ $item->dimenzije_un_jedinice }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Dimenzije vanjske jedinice - ŠxVxD (mm): <strong>{{ $item->dimenzije_vanj_jedinice }}</strong>
                                                    </li>
                                                    <li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Tezina unutarnje jedinice (kg): <strong>{{ $item->tezina_un_jedinice }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Tezina vanjske jedinice (kg): <strong>{{ $item->tezina_vanj_jedinice }}</strong>
                                                    </li>
                                                    <li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Razina zvučnog tlaka u.j. (dB(A)): <strong>{{ $item->razina_zvucnog_tlaka_u_j }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Razina zvučnog tlaka v.j. (dB(A)): <strong>{{ $item->razina_zvucnog_tlaka_v_j }}</strong>
                                                    </li>
												</ul>
											</div>
                                            <div class="column-1_3 sc_column_item sc_column_item_3 odd">
												<ul class="sc_list sc_list_style_iconed">
													<li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Promjer cijevi tekuca faza (inch(mm)): <strong>{{ $item->promjer_cijevi_tekuca }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Promjer cijevi plinska faza (inch(mm)): <strong>{{ $item->promjer_cijevi_plinska }}</strong>
                                                    </li>
													<li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Maksimalna duljina cjevovoda (m): <strong>{{ $item->max_duljina_cjevovoda }}</strong>
                                                    </li>
													<li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Maksimalna visinska razlika (m): <strong>{{ $item->max_visinska_razlika }}</strong>
                                                    </li>
													<li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Protok zraka unutarnja jedinica (m3/h): <strong>{{ $item->protok_zraka_unutarnja }}</strong>
                                                    </li>
                                                    <li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Protok zraka vanjska jedinica (m3/h): <strong>{{ $item->protok_zraka_vanjska }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Raspolozivi pad tlaka (Pa): <strong>{{ $item->raspolozivi_pad_tlaka }}</strong>
                                                    </li>
                                                    <li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        Područje rada hl./gr°C (Min~Max): <strong>{{ $item->podrucje_rada }}</strong>
                                                    </li>
                                                    <li class="sc_list_item odd"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        SEER (W): <strong>{{ $item->seer }}</strong>
                                                    </li>
                                                    <li class="sc_list_item even"><span class="sc_list_icon icon-dot cerulean"></span>
                                                        SCOP (W): <strong>{{ $item->scop }}</strong>
                                                    </li>
                                                    
												</ul>
											</div>
										</div>
									</div>
							</div>
						</div>
                        
                        
						<div class="post_info_bottom_cat_tag">							

						</div>

					</div>
					<!-- </div> class="post_content" itemprop="articleBody"> -->
												
				</div>
				
			</div>
			<!-- </div> class="content_wrap"> -->
		</div>
    
@stop    