@extends('backend.layouts.main-admin')

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Search for item</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <form action="/admin/items" method="GET">
                        <div class="input-group">
                            <input type="text" name="title" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                @foreach(app('request')->input() as $param => $value)
                    @if($param != 'page')
                        <button id="{{$param}}" type="button"
                                class="btn btn-primary btn-xs removeTag">{{ $value }}</button>
                    @endif
                @endforeach

                <div class="x_panel">
                    <div class="x_title">
                        {{--<h2>Plain Page</h2>--}}
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    {{-- DATATABLE --}}
                    <div class="x_content">
                        <div class="x_content">
                            <div id="datatable-checkbox_wrapper"
                                 class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                <div class="row">
                                    <div class="col-sm-12">

                                        {{-- TABLE --}}
                                        <table id="datatable-checkbox"
                                               class="table table-striped table-bordered bulk_action dataTable no-footer"
                                               role="grid" aria-describedby="datatable-checkbox_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_disabled" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-label=""
                                                    style="width: 240px;">Photo
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 240px;">Title
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 386px;">Category
                                                </th>
                                                <th id="price_pdv" class="sorting" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 184px;">Price PDV
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending"
                                                    style="width: 102px;">Price Discount
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending"
                                                    style="width: 102px;">Action
                                                </th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            @foreach($items as $item)
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <img src="{{ $item->slika }}" width="100">
                                                    </td>
                                                    <td class="sorting_1">{{ $item->naziv }}</td>
                                                    <td>{{ $item->category->title }}</td>
                                                    <td>{{ $item->cijena_pdv }}</td>
                                                    <td>{{ $item->cijena_popust }}</td>
                                                    <td>
                                                        <a href="{{ route('admin_items_show', $item->id) }}" type="button"
                                                           class="btn btn-primary btn-outline btn-xs">Info</a>
                                                        <a href="{{ route('admin_items_edit', $item->id) }}" type="button"
                                                           class="btn btn-success btn-outline btn-xs">Edit</a>
                                                        {!! link_to('Delete', "/items/{$item->id}", 'DELETE') !!}
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                        {{-- /TABLE --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="datatable-checkbox_info" role="status"
                                             aria-live="polite">{{  table_results_num($items) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                             id="datatable-checkbox_paginate">
                                            {!! $items->appends('item')->render() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            {{--$('.dataTable').DataTable({--}}
            {{--responsive: true--}}
            {{--});--}}

            $('.removeTag').on('click', function () {
                url = removeURLParameter(window.location.href, $(this).attr("id"));
                window.location.href = url;
            });

            $('.sorting').on('click', function () {
                param = $(this).attr("id");
            });
        });


        function removeURLParameter(url, parameter) {
            //prefer to use l.search if you have a location/link object
            var urlparts = url.split('?');
            if (urlparts.length >= 2) {

                var prefix = encodeURIComponent(parameter) + '=';
                var pars = urlparts[1].split(/[&;]/g);

                //reverse iteration as may be destructive
                for (var i = pars.length; i-- > 0;) {
                    //idiom for string.startsWith
                    if (pars[i].lastIndexOf(prefix, 0) !== -1) {
                        pars.splice(i, 1);
                    }
                }

                url = urlparts[0] + (pars.length > 0 ? '?' + pars.join('&') : "");
                return url;
            } else {
                return url;
            }
        }
    </script>
@stop
