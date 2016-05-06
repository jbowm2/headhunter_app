<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="active">
                <a href="/home">
                    Overview
                </a>
            </li>
            <li>
                <a href="/resume/create">
                    Create your Resume
                </a>
            </li>
            <li>
                @if($user->profile()->count())
                    <a href="{{ action('ProfilesController@edit', [$user->id]) }}">
                        Edit your Profile
                    </a>
                @else
                    <a href="/profile/create">
                        Create your Profile
                    </a>
                @endif
            </li>
            <li>
                <a href="#">
                    More Links
                </a>
            </li>
        </ul>
    </div>
</div>