@extends('partials.contentdisplay')

@section('title', 'About Cole')

@section('content')
    <div class="section grey darken-4 grey-text">
        <div class="container grey-text ">
            <h3>@yield('title')</h3>
            <p>Hi, I'm Cole DeMan and I'm a Computer Science student at Dalhousie University. Currently I'm planning
                on finishing my Bachelors of Computer Science in December of 2016. This is a website I've created to
                act as a custom web presence for myself and hopefully show I have skills as a web designer.</p>

            <p>During my studies at Dalhousie I have learnt a lot of skills, from C to Designing User Interfaces. I've
                had a lot of experience working in teams for Agile Development.</p>

            <p>One example of my agile experience can be seen in <a href="/about/ui_report">
                    this report</a> on a final project designing a user interface. We went through many iterations and
                design
                for although there was no actual code created for this project our team met several times a week for 4
                months
                developing this user interface using an agile/S.C.R.U.M process. We also performed user testing to find
                flaws and improve our design. It was a great experience for learning how to work as a team and gaining a
                strong understanding of how to design an interface for users.
            </p>
            <p>I learned more about agile, team work, and developing a real world application in a course called
                Community Outreach In this class we were marked on how well we worked on a real world non-profit
                application for Shift-Key
                Labs. In 4 months we worked with a client to build a RESTful API for an app for <a
                        href="http://nssandbox.ca/">Nova Scotia Sandboxes</a>. They wanted an app for both Android and
                iOS that would display news from all of the
                different sandboxes. As well as allow users to register and search events. We followed an agile aproach
                and completed an admin panel to control the database used by the app. We implemented the RESTful API
                using the laravel PHP framework, completed it save a few things the next team of students may want to
                add depending on
                where they take the next stage of development. Then started the apps themselves. (If you are a potential
                employer I
                have permission to use the source code as an example of my experience but am unable to share it publicly
                because it is technically owned by Shift-Key Labs)</p>

            <p>{{URL::asset('pdf/cole_deman_resume.pdf')}}</p>

        </div>
    </div>
@endsection