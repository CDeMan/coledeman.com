@extends('partials.contentdisplay')

@section('title', 'Shit Generator')

@section('content')
    <div class=" section grey darken-4 z-depth-4">
        <div class="container grey-text">
            <h2>@yield('title')</h2>
            <div class="form-group">
                <form>
                    <input type="text" name="word" value="{!!$data!!}">
                    <input type="submit">
                </form>
            </div>
            <p>
                👌👀👌👀👌👀👌👀👌👀 {!!$data!!} shit {!!$data!!} sHit👌 thats ✔ some {!!$data!!}👌👌shit
                right👌👌there👌👌👌 right✔there ✔✔if i do ƽaү so my self 💯 i say so 💯 thats what im talking about
                right there right there (chorus: ʳᶦᵍʰᵗ ᵗʰᵉʳᵉ) mMMMMᎷМ💯 👌👌 👌НO0ОଠOOOOOОଠଠOoooᵒᵒᵒᵒᵒᵒᵒᵒᵒ👌 👌👌 👌 💯
                👌 👀 👀 👀 👌👌{!!$data!!} shit
            </p>
        </div>
    </div>

@endsection

