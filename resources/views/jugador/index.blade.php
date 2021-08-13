<table class="table table-striped  table-responsive">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Equipo</th>
            <th>Jugador</th>
            <th>Goles</th>
            <th>Posicion</th>
               
        </tr>
        </thead>
        <tbody>
        @foreach($jugadores as $jugador)
            <tr>
                
                <td>{{$jugador->id}}</td>
                <td>{{$jugador->equipo}}</td>
                <td>{{$jugador->jugador}}</td>
                <td>{{$jugador->goles}}</td>
                <td>{{$jugador->posicion}}</td>
                </td>
                <td>
                    <a href="{{url('jugador/'.$jugador->id.'/edit')}}">
                    Editar
                
                    </a>
                
                </td>
                <td>
              <form action="{{url('jugador/'.$jugador->id)}}" method="post">
              @csrf
              {{method_field('DELETE')}}
              <input type="submit" onclick="return confirm('Deseas borrar? ')" value="Borrar">
              </form>
                </td>
            </tr>
           @endforeach
        </tbody>
</table>


