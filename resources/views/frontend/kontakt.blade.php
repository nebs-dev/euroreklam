@extends('frontend.layouts.main')

@section('content')

    <div class="top_panel_title top_panel_style_1  title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_1  title_present_inner breadcrumbs_present_inner">
            <div class="content_wrap">
                <h1 class="page_title">Kontakt <small>{{ app('request')->input('category') }}</small></h1>
                <div class="breadcrumbs"><a class="breadcrumbs_item home" href="/">Pocetna</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Kontakt</span></div>
            </div>
        </div>
    </div>

    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap main-block">
            <div class="content">
                <div class="itemscope post_item post_item_single post_featured_default post_format_standard post-76 post type-post status-publish format-standard has-post-thumbnail hentry category-components tag-air-conditioning tag-installation" itemscope="" itemtype="http://schema.org/Article">
                    <div class="post_featured">
                        <div class="post_thumb">

                            <p>Telefon: 099 733 46 17</p>
                            <p>Adresa: Dubrovacka 52, Osijek</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
