@extends("layout2.master")

@section("content")

    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Cmd Non Valide</h4>
                        <div class="add-product">
                        </div>
                        <table>
                            <tr>
                                <th>#ID</th>
                                <th>Client</th>
                                <th>Date Creation</th>
                            </tr>
                            @foreach($list1 as $so)
                                <tr> 
                                    <td>{{$so->id}}</td>
                                    <td>{{$so->nom}} {{$so->prenom}}</td>
                                    <td>{{$so->created_at}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Cmd valide</h4>
                        <div class="add-product">
                        </div>
                        <table>
                            <tr>
                                <th>#ID</th>
                                <th>Client</th>
                                <th>Date Creation</th>
                                <th>Date Validation</th>
                            </tr>
                            @foreach($list2 as $so)
                                <tr>
                                    <td>{{$so->id}}</td>
                                    <td>{{$so->nom}} {{$so->prenom}}</td>
                                    <td>{{$so->created_at}}</td>
                                    <td>{{$so->updated_at}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection