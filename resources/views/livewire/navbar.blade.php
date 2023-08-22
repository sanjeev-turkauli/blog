<div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand p-0" href="{{url('/')}}">
                <h2 class="lh-1">Coding Hub</h2>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="max-width: max-content;">
            <ul class="nav navbar-nav navbar-right d-flex  flex-row">
                <li class="active"><a href="index.html">Home</span></a></li>
                <li><a href="html5-templates.html">HTML5 Templates</a></li>
                <li><a href="wordpress-themes.html">Wordpress Themes</a></li>
                <li><a href="design-inspiration.html">Design Inspiration</a></li>
                <li><a href="resources.html">Resource</a></li>
            </ul>
        </div>
        @if(Auth::check())
            <button class="btn btn-primary" wire:click.prevent="logOut">LogOut</button>
        @else
            <button class="btn btn-primary" wire:click.prevent="logIn">Login</button>
        @endif
    </nav>
</div>