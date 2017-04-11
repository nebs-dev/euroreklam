@extends('frontend.layouts.main')

@section('content')    
                
    <div class="top_panel_title top_panel_style_1  title_present breadcrumbs_present scheme_original">
		<div class="top_panel_title_inner top_panel_inner_style_1  title_present_inner breadcrumbs_present_inner">
			<div class="content_wrap">
				<h1 class="page_title">Klime</h1>                
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
                                                                                
                                        <div class="column-1_2 sc_column_item sc_column_item_2 even align-right">
											<div class="sc_socials sc_socials_type_icons sc_socials_shape_square">
												<div class="sc_socials_item">
                                                    <a href="?category=midea" class="social_icons">
                                                        <img src="images/MideaLogoFooter.png" />
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="?category=samsung" class="social_icons">
                                                        <img src="images/SamsungLogoFooter.png" />
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="?category=toshiba" class="social_icons">
                                                        <img src="images/ToshibaLogoFooter.png" />
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="?category=lg" class="social_icons">
                                                        <img src="images/LGLogoFooter.png" />
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="?category=korel" class="social_icons">
                                                        <img src="images/KorelLogoFooter.png" />
                                                    </a>
                                                </div>
											</div>
										</div>
                                        
										<div id="sc_blogger_257919144" class="sc_blogger layout_portfolio_3 template_portfolio  sc_blogger_horizontal">                                                                                                        
											<div class="isotope_wrap" data-columns="3">
                                                
                                                @foreach($items as $item)
													<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_3 isotope_column_3						">
														<div class="post_item_portfolio_portfolio_3					post_format_standard odd">

															<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
																<div class="post_featured img ">
																	<a href="post.html"><img width="370" height="246" alt="Costs Related to Service Callouts and Repairs During the Contract" src="{{ asset($item->slika) }}"></a>
																</div>

																<div class="post_info_wrap info">
																	<div class="info-back">

																		<h4 class="post_title"><a href="post.html">{{ $item->naziv }}</a></h4>

																		<div class="post_descr">
																			<p class="post_info">
																				<span class="post_info_item post_info_posted icon-clock-empty"> 
                                                                                    <a href="post.html" class="post_info_date">
                                                                                        @if($item->cijena_popust)
                                                                                            <strike>{{ $item->cijena_pdv }} kn</strike>
                                                                                        @else
                                                                                            {{ $item->cijena_pdv }} kn
                                                                                        @endif                                                                                                        
                                                                                    </a>
                                                                                    <a href="post.html" class="post_info_date">
                                                                                        {{ $item->cijena_popust }} kn
                                                                                    </a>
                                                                                </span>
                                                                                </span>
																				<span class="post_info_item post_info_counters">	
                                                                                    <a class="post_counters_item post_counters_views icon-eye" href="post.html">
                                                                                        {{ $item->category->title }}
                                                                                    </a>
																				</span>
																			</p>
																			<p>
                                                                                <a href="post.html">{{ string_truncate($item->opis, 150) }}</a>
                                                                            </p>
																			<p class="post_buttons"></p>
																		</div>
																	</div>
																</div>
																<!-- /.info-back /.info -->
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
