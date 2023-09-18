
@section("title" , "Settings") 
@extends("layout")



@section("content") 
    @if(count($computers)!=0)
        <body class="backround_image">
                <section class='page__settings'>
                <main class="table">
                    <section class="table__header">
                        <h1 class="large rise">Computers Settings</h1>
                    </section>
                    <section class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Mark</th>
                                    <th>Model</th>
                                    <th>PR.date</th>
                                    <th>Price</th>
                                    <th class='center'>Parameters</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($computers as $computer)
                                <tr>
                                    <td><strong>{{$computer["id"]}}.</strong></td>
                                    <td><img src="{{asset('Computer.png')}}" alt="" srcset=""></td>
                                    <td>{{$computer['mark']}}</td>
                                    <td>{{$computer['model']}}</td>
                                    <td>{{$computer['DateProduction']}}</td>
                                    <td><strong>{{$computer['prix']}}$</strong></td>
                                    <td  class='center'>
                                        <div class="view_button">
                                            <a class='view' href="{{ route('computers.show',['computer' => $computer['id']])}}">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                        </div>
                                        <div class="view_button">
                                            <a class='edit' href="{{route('computers.edit', $computer->id)}}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </div>
                                        <div class="view_button">
                                            <form action="{{route('computers.destroy', $computer->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class='delete' type="submit">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </main>
            </section>
        </body>
  

        @else 
        <div class='MessageNoComputer'>
            <p> Now Computers to display </p>
            <img src="{{asset('noun-disposal.png')}}" alt="noun disposal" srcset="">
        </div>
    @endif

@endsection


