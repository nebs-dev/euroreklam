@extends('backend.layouts.main-admin')

@section('content')

        <!-- page content -->
<div class="right_col" role="main">
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
                                                <th class="sorting_asc" tabindex="0"
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
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 184px;">Price
                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="datatable-checkbox" rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending"
                                                    style="width: 102px;">Price PDV
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
                                                    <td></td>
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
                                             aria-live="polite">Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                             id="datatable-checkbox_paginate">
                                            {{--<ul class="pagination">--}}
                                            {{--<li class="paginate_button previous disabled"--}}
                                            {{--id="datatable-checkbox_previous"><a href="#"--}}
                                            {{--aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="0"--}}
                                            {{--tabindex="0">Previous</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="paginate_button active"><a href="#"--}}
                                            {{--aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="1"--}}
                                            {{--tabindex="0">1</a></li>--}}
                                            {{--<li class="paginate_button "><a href="#"--}}
                                            {{--aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="2"--}}
                                            {{--tabindex="0">2</a></li>--}}
                                            {{--<li class="paginate_button "><a href="#"--}}
                                            {{--aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="3"--}}
                                            {{--tabindex="0">3</a></li>--}}
                                            {{--<li class="paginate_button "><a href="#"--}}
                                            {{--aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="4"--}}
                                            {{--tabindex="0">4</a></li>--}}
                                            {{--<li class="paginate_button "><a href="#"--}}
                                            {{--aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="5"--}}
                                            {{--tabindex="0">5</a></li>--}}
                                            {{--<li class="paginate_button "><a href="#"--}}
                                            {{--aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="6"--}}
                                            {{--tabindex="0">6</a></li>--}}
                                            {{--<li class="paginate_button next" id="datatable-checkbox_next"><a--}}
                                            {{--href="#" aria-controls="datatable-checkbox"--}}
                                            {{--data-dt-idx="7" tabindex="0">Next</a></li>--}}
                                            {{--</ul>--}}
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
</div>
</div>
<!-- /page content -->

@stop