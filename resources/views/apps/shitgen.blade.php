@extends('partials.contentdisplay')

@section('title', 'Shit Generator')

@section('content')
    <div class=" section grey darken-4 z-depth-4">
    <div class="container grey-text">
        <h2>@yield('title')</h2>
        <?php
        $noun = $data[1];
        $adj = $data[0]
        ?>
        <p>
            👌👀👌👀👌👀👌👀👌👀 {!!$adj!!} {!!$noun!!} {!!$adj!!} {!!$noun!!}👌 thats ✔ some {!!$adj!!}
            👌👌{!!$noun!!}
            right👌👌there👌👌👌 right✔there ✔✔if i do ƽaү so my self 💯 i say so 💯 thats what im talking about
            right there right there (chorus: ʳᶦᵍʰᵗ ᵗʰᵉʳᵉ) mMMMMᎷМ💯 👌👌 👌НO0ОଠOOOOOОଠଠOoooᵒᵒᵒᵒᵒᵒᵒᵒᵒ👌 👌👌 👌 💯
            👌 👀 👀 👀 👌👌{!!$adj!!} {!!$noun!!}
        </p>


        <div class="card-panel  grey darken-1">
            <div class="form-group black-text">
                <form>
                    <div class="row">
                        <div class="col s6">
                            <label class="black-text">Adjective:</label>
                            <input type="text" name="adj" value="{!!$adj!!}">
                        </div>
                        <div class="col s6">
                            <label class="black-text">Noun:</label>
                            <input type="text" name="noun" value="{!!$noun!!}">
                        </div>
                        <input type="submit" value="Generate">
                    </div>
                </form>
            </div>
        </div>
        <a href="{{ action('apps\shitgen\AppController@listArchive') }}">See all previously used words</a>
    </div>
    </div>

@endsection

