{{-- index sechedule teachers --}}
@extends('templates.structure-teacher')
@section('title','Incio maestros')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/tablestyles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/schedulestyles.css') }}">
  <style>
  	p{
  		margin-bottom: 2px;
  	}
    p{
      font-size: 14px;
    }
    table{
      padding: 2px;
    }
    }
  </style>
@endsection
@section('content')
	<div class="table-container">
    <h2>Horario</h2>
		<table class="table table-sm table-striped">
			<thead class="thead-dark">
				<tr>
					<th id="hhour" scope="col">Hora</th>
					<th scope="col">Lunes</th>
					<th scope="col">Martes</th>
					<th scope="col">Miercoles</th>
					<th scope="col">Jueves</th>
					<th scope="col">Viernes</th>
				</tr>
			</thead>
			<tbody>
				@for ($i = 0; $i < 9; $i++)
					<tr>
						<th scope ='col'>{{$hours[$i]}} - {{$hours[$i+1]}}</th>
						@for ($a = 0; $a < 5; $a++)
							@if (isset($subjectslist[$a][$i]))
								<td>
								{!!$subjectslist[$a][$i]!!}
								</td>
							@else
								<td></td>
							@endif
						@endfor
					</tr>
				@endfor
			</tbody>
		</table>
	</div>
@endsection
@section('js')
  <script>
  		sideitemactive(6);
  </script>
@endsection
