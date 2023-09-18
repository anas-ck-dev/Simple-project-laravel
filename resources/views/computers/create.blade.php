@extends("layout")

@section("title" , 'Create Computer')

@section("content") 
    <div class="createPage">
        <section class="PageContent createCard">
            <div class="titleCreate">
                <h1>Create a new computer</h1>
            </div> 
            <div class="formCreate">
                <form action="{{ route('computers.index') }}" method="POST">
                    @csrf
                    <div>
                        <div>
                            <label for="computer-mark" class="text-sm">Computer Mark</label>
                            <input id="computer-mark" name="computer-mark" value="{{old('computer-mark')}}" type="text">
                            <div class="messagerror" id="left">
                                @error('computer-mark')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="computer-model" class="text-sm">Computer model</label>
                            <input id="computer-model" name="computer-model" value="{{old('computer-model')}}" type="text">
                            <div class="messagerror" id="left">
                                @error('computer-model')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="computer-DateProduction" class="text-sm">Computer production date</label>
                            <input id="computer-DateProduction" name="computer-DateProduction" value="{{old('computer-DateProduction')}}" type="date">
                            <div class="messagerror" id="right">
                                @error('computer-DateProduction')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="computer-prix" class="text-sm">Computer price</label>
                            <input id="computer-prix" name="computer-prix" value="{{old('computer-prix')}}" type="number">
                            <div class="messagerror" id="right">
                                @error('computer-prix')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class='button'>
                        <button type="submit">Submit</button>
                    </div>
                </form> <!-- You were missing the closing '>' of the form tag here -->
            </div>
        </section>
    </div>
@endsection
