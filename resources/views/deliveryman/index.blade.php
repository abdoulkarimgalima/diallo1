       @extends('layouts.app')
       @section('content')
       <tr>
            <th>#</th>
            <th>nom}</th>
            <th>prenom</th>
            <th>NUMTEL</th>
            <th>Adresse</th>
        </tr>
            @foreach($deliveryman as $d)
                <tr>
                    <th>#</th>
                    <th>{{$d->first_namedelivery}}</th>
                    <th>{{$d->name_delivery}}</th>
                    <th>{{$d->first_NUMTEL}}</th>
                    <th>{{$d->Address}}</th>

                    <th>

                        <p><a href="{{route('deliveryman_edit',['id'=> $d->id])}}">Editer</a>

                </p>
                    </th>
                </tr>
        @endforeach
@endsection