{{--/**
 * Created by PhpStorm.
 * User: cole
 * Date: 15/01/17
 * Time: 7:29 PM
 *--}}
@extends('partials.contentdisplay')

@section('title', 'Cipher App')

@section('scripts')
    <script src="{{URL::asset('js/jquery.js')}}"></script>
@endsection

@section('meta')
    <meta name="description"
          content="A app for encrypting a decrypting Caesar Ciphers, Vigenère ciphers, and Matrix Transposition Ciphers.">
    <meta name="keywords" content="Vigenère, Vigenere, caesar, matrix transposition, cipher, encrypt, decrypt">
@endsection

@section('content')

    <div class=" section grey darken-4 z-depth-4">
        <div class="container grey-text">
            <h2>@yield('title')</h2>

            <div class="card-panel white black-text">
                <h3>@yield('subtitle')</h3>
                <div class="row">
                    <div class="input-field col s6">
                        <select id="cipherselect">
                            <option value="1">Caesar Cipher</option>
                            <option value="2">Vigenère cipher</option>
                            <option value="3">Matrix Transposition Cipher</option>
                        </select>
                        <label>Cipher Select</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="key" type="text" class="validate">
                        <label id="keylabel" for="key">Key: (Integer 0 to 26)</label>
                    </div>
                </div>
                <div class="row">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">lock_outline</i><span
                                        id="descriptionheader">Cipher Description</span></div>
                            <div class="collapsible-body"><p id="description">Key: Any number 0 to 26.</p></div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div id="radio">
                        <div class="col s3">
                            <input name="group1" type="radio" id="encrypt"/>
                            <label for="encrypt">Encrypt</label>
                        </div>
                        <div class="col s3">
                            <input name="group1" type="radio" id="decrypt"/>
                            <label for="decrypt">Decrypt</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label id="textarea1label" for="textarea1">Plaintext</label>
                            </div>
                        </div>
                        <a id="process" class="waves-effect waves-light btn">Process</a>
                        <a id="swap" class="waves-effect waves-light btn">Swap</a>
                        <div class="row">
                            <div class="input-field col s12">
                                <h4>Result</h4>
                                <p id="result">Result will appear here.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("endscripts")

    <script src="{{URL::asset('js/Ciphers.js')}}"></script>

@endsection