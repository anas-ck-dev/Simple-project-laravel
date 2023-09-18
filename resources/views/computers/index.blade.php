
@section("title" , "Computers") 
@extends("layout")

@section("content") 
    @if(count($computers)>0)
    <div class="titleNewComputer">
        <h1>All new Computers</h1>
    </div> 
    <div class="content">
        @foreach($computers as $computer)
                <section class="PageContent cartglobal">
                    <img src="{{ asset('5.jpg')}}" alt="" srcset="">
                    <p> <span>Computer {{$computer["id"]}}</span> </p>
    
                    <div class="ComputerDescription">
                        <ul>
                            <li>{{$computer['mark']}}</li>
                            <li>{{$computer['model']}}</li>
                            <li>{{$computer['DateProduction']}}</li>
                            <li class='left'>{{$computer['prix']}}$/</li>
                        </ul>
                    </div>
                    <div class="buttonCard">
                        <div class="detailButton">
                            <a href="{{route('computers.show',['computer' => $computer['id']])}}" class="hr"> Show details
                                <i class="fa-solid fa-arrow-right-long buttonIcon"></i>
                            </a>
                        </div>
                    </div>
                </section>
                @endforeach
                @else 
                <div class='MessageNoComputer'>
                    <p> Now Computers to display </p>
                </div>
            </div>
    @endif
@endsection


