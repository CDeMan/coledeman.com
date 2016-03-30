@extends('partials.contentdisplay')

@section('title', 'Home')

@section('styles')
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css" media="screen,projection"/>
@endsection

@section('card1lnk', '/about')
@section('card2lnk', 'http://github.coledeman.com')
@section('card3lnk', '/resume')
@section('cardcolor', 'grey darken-3 grey-text text-lighten-4')

@section('content')

    <div class="parallax-container valign-wrapper row">
        <div class="col s4 valign cards">
            <div class="center">
                <a href="@yield('card1lnk')">
                    <img class="circle profile_pic" src={{URL::asset('images/userimage.jpg')}}>
                </a>
                <a href="@yield('card1lnk')">
                    <div class="card-panel  @yield('cardcolor')">
                        <p class="center flow-text">About Cole</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col s4 valign cards">
            <div class="center">
                <a href="@yield('card2lnk')">
                    <img class="circle profile_pic"
                         src='http://assets2.bigthink.com/system/idea_thumbnails/60118/primary/computer_code.jpg?1448159143'>
                </a>
                <a href="@yield('card2lnk')">
                    <div class="card-panel  @yield('cardcolor')">
                        <p class="center flow-text">GitHub</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col s4 valign cards">
            <div class="center">
                <a href="@yield('card3lnk')">
                    <img class="circle profile_pic"
                         src='http://v2.yewno.com/wp-content/uploads/2015/11/9cbd773a1b3393d88e12f0123e1a1dc4_clientImage_2400x1800_xlarge_original_1.jpg'>
                </a>
                <a href="@yield('card3lnk')">
                    <div class="card-panel  @yield('cardcolor')">
                        <p class="center flow-text">Resume</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="parallax no-padding s12">
            <img src={{URL::asset('images/para1.jpg')}}>
        </div>
    </div>
    <div class=" section grey darken-4 z-depth-4">
        <div class="container grey-text">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hanc quoque iucunditatem, si vis, transfer in
                animum; Quid ait Aristoteles reliquique Platonis alumni? Duo Reges: constructio interrete. Faceres tu
                quidem, Torquate, haec omnia; Nam et complectitur verbis, quod vult, et dicit plane, quod intellegam; At
                iam decimum annum in spelunca iacet. Et quidem illud ipsum non nimium probo et tantum patior,
                philosophum loqui de cupiditatibus finiendis. Si enim ad populum me vocas, eum. Aufert enim sensus
                actionemque tollit omnem. Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt.
                Quare attende, quaeso. </p>

            <p>Bonum liberi: misera orbitas. Vitiosum est enim in dividendo partem in genere numerare. Egone quaeris,
                inquit, quid sentiam? Quid dubitas igitur mutare principia naturae? </p>

            <p>Ab hoc autem quaedam non melius quam veteres, quaedam omnino relicta. Verum hoc idem saepe faciamus. Hi
                curatione adhibita levantur in dies, valet alter plus cotidie, alter videt. Ut necesse sit omnium rerum,
                quae natura vigeant, similem esse finem, non eundem. Omnia contraria, quos etiam insanos esse
                vultis. </p>

            <p>Atque his de rebus et splendida est eorum et illustris oratio. Quid enim de amicitia statueris utilitatis
                causa expetenda vides. Si verbum sequimur, primum longius verbum praepositum quam bonum. Qui non
                moveatur et offensione turpitudinis et comprobatione honestatis? Age sane, inquam. Sic enim censent,
                oportunitatis esse beate vivere. Sed tamen est aliquid, quod nobis non liceat, liceat illis. At iste non
                dolendi status non vocatur voluptas. </p>

            <p>Vestri haec verecundius, illi fortasse constantius. Reguli reiciendam; Videsne quam sit magna dissensio?
                Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Nec vero alia sunt quaerenda
                contra Carneadeam illam sententiam. At, si voluptas esset bonum, desideraret. Nam Pyrrho, Aristo,
                Erillus iam diu abiecti. Tibi hoc incredibile, quod beatissimum. </p>

        </div>
    </div>

@endsection

@section('endscripts')
    <script>

        $(document).ready(function () {
            $('.parallax').parallax();
        });

    </script>
@endsection