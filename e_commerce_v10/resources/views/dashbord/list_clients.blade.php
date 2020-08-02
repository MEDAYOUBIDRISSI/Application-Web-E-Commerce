@extends("layout2.master")

@section("content")

    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Client List</h4>
                        <div class="add-product">
                        </div>
                        <table>
                            <tr>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>dateNaissance</th>
                                <th>Tel</th>
                                <th>ville</th>
                                <th>codepostale</th>
                                <th>pays</th>
                            </tr>
                            @foreach($admin as $so)
                                <tr>
                                    <td><img src="{{asset('storage/'.$so->photo)}}" alt="aucun"/></td>
                                    <td>{{$so->nom}}</td>
                                    <td>{{$so->prenom}}</td>
                                    <td>{{$so->email}}</td>
                                    <td>{{$so->password}}</td>
                                    <td>{{$so->dateNaissance}}</td>
                                    <td>{{$so->tel}}</td>
                                    <td>{{$so->ville}}</td>
                                    <td>{{$so->codePostale}}</td>
                                    <td>{{$so->pays}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection