
@section("title" , 'computer') 
@extends("layout")

@section("content") 
    <div class="contentComputer">
        <section class="PageContent detailsCart">
            <img src="{{ asset('5.jpg')}}" alt="" srcset="">
            <p> <span>Computer {{$computer["id"]}}</span> </p>

            <div class="ComputerDescription">
                <ul>
                    <li>{{$computer['mark']}}</li>
                    <li>{{$computer['model']}}</li>
                    <li>{{$computer['DateProduction']}}</li>
                    <li>{{$computer['prix']}}</li>
                </ul>
            </div>
        </section>
    </div>

@endsection

