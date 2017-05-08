@extends('frontend.layouts.main')

@section('content')    
                
    <div class="top_panel_title top_panel_style_1  title_present breadcrumbs_present scheme_original">
		<div class="top_panel_title_inner top_panel_inner_style_1  title_present_inner breadcrumbs_present_inner">
			<div class="content_wrap">
				<h1 class="page_title">Klime {{ app('request')->input('category') ? '-' : '' }} <small>{{ app('request')->input('category') }}</small></h1>                
				<div class="breadcrumbs"><a class="breadcrumbs_item home" href="/">Pocetna</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Klime</span></div>
			</div>
		</div>
    </div>

	<div class="page_content_wrap page_paddings_yes">    
		<div class="content_wrap">
			<div class="content">                
				<div class="itemscope post-160 page hentry" itemscope itemtype="http://schema.org/Article">                    
					<div class="post_content" itemprop="articleBody">
						<div class="full-width">
							<div class="column">                                
								<div class="main-block"> 
                                    <div class="wrapper">
										<div class="sc_content content_wrap">
											<div class="h055"></div>
											<div id="sc_services_1306377838_wrap" class="sc_services_wrap">
												<div id="sc_services_1306377838" class="sc_services sc_services_style_services-1 sc_services_type_icons  margin_top_medium margin_bottom_tiny">
													<div class="sc_columns columns_wrap">
														<div class="column-1_5 column_padding_bottom">
															<div id="sc_services_1306377838_1" class="sc_services_item sc_services_item_1 odd first">
																<a href="?category=midea">
                                                                    <img src="images/klime_logo/midea.png" />
                                                                </a>																		
															</div>
														</div>
                                                        <div class="column-1_5 column_padding_bottom">
															<div id="sc_services_1306377838_1" class="sc_services_item sc_services_item_1 odd first">
																<a href="?category=samsung">
                                                                    <img src="images/klime_logo/samsung.png" />
                                                                </a>																		
															</div>
														</div>
                                                        <div class="column-1_5 column_padding_bottom">
															<div id="sc_services_1306377838_1" class="sc_services_item sc_services_item_1 odd first">
																<a href="?category=toshiba">
                                                                    <img src="images/klime_logo/toshiba.png" />
                                                                </a>																		
															</div>
														</div>
                                                        <div class="column-1_5 column_padding_bottom">
															<div id="sc_services_1306377838_1" class="sc_services_item sc_services_item_1 odd first">
																<a href="?category=lg">
                                                                    <img src="images/klime_logo/lg.png" />
                                                                </a>																		
															</div>
														</div>
                                                        <div class="column-1_5 column_padding_bottom">
															<div id="sc_services_1306377838_1" class="sc_services_item sc_services_item_1 odd first">
																<a href="?category=korel">
                                                                    <img src="images/klime_logo/korel.jpg" />
                                                                </a>																		
															</div>
														</div>
													</div>
												</div>
												<!-- /.sc_services -->
											</div>
											<!-- /.sc_services_wrap -->
										</div>
									</div>
                                                                       
									<div class="wrapper">
                                        
										<div id="sc_blogger_257919144" class="sc_blogger layout_portfolio_3 template_portfolio  sc_blogger_horizontal">                                                                                                        
											<div class="isotope_wrap" data-columns="3">
                                                
                                                @foreach($items as $item)
													<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_3 isotope_column_3						">
														<div class="post_item_portfolio_portfolio_3					post_format_standard odd">

															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
																<div class="post_featured img ">
																	<a href="/klime/{{ $item->id }}">
                                                                        <img width="370" height="246" alt="Costs Related to Service Callouts and Repairs During the Contract" src="{{ asset($item->slika) }}">
                                                                    </a>
																</div>
                                                                
                                                                <div class="post_content isotope_item_content">

            														<h5 class="post_title"><a href="/klime/{{ $item->id }}">{{ $item->naziv }}</a></h5>
            														<div class="post_info">
            															<span class="post_info_item post_info_posted icon-clock-empty"> 
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
                                                                        </span>
            															<span class="post_info_item post_info_counters">	
                                                                            <a class="post_counters_item post_counters_views icon-eye" href="javascript:void(0)">
                                                                                {{ $item->category->title }}
                                                                            </a>
            															</span>
            														</div>
            														<div class="post_descr">
            															<p>
                                                                            {{ string_truncate($item->opis, 150) }}
                                                                        </p>
                                                                        <a href="/klime/{{ $item->id }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small sc_button_style_color_style2">Vise</a> 
                                                                    </div>

            													</div>
                                                                
															</div>
															<!-- /.post_content -->
														</div>
														<!-- /.post_item -->
													</div>
													<!-- /.isotope_item -->
                                                @endforeach  
												
											</div>                                                                                                          
										</div>
                                        
                                        {!! $items->appends(Request::except('page'))->render() !!}
                                        
									</div>
								</div>
							</div>
						</div>                                

					</div>                            
				</div>
				<div class="related_wrap related_wrap_empty"></div>                                                

			</div>
			<!-- </div> class="content"> -->                                    
            
		</div>
		<!-- </div> class="content_wrap"> -->
	</div>
	<!-- </.page_content_wrap> -->

@stop
