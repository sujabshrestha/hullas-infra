<div class="our-team">
    <div class="container">
        <div class="session-title row">
            <h2>Our Team</h2>
            <p>We are alliance of dedicated medical professionals with an objective of providing medical care at your most difficult times and help you experience the safest travel.
                To serve you well, we maintain the pool of experienced professionals in:   </p>
        </div>

        <div class="row mb-4">
            @if (isset($teams) && $teams->count() > 0)
            @foreach ($teams->take(4) as $team)
            <div class="col-md-3 col-sm-6">
                <div class="card-1 team-member">
                    <img src="{{ asset($team->image) ?? '' }}" alt="Team Member 1">
                    <p><b>{{ $team->title }}</b></p>
                </div>
            </div>
            @endforeach
            @endif


        </div>
        <div class="row">
            @if (isset($teams) && $teams->count() > 0)
            @foreach ($teams->skip(4)->take(4) as $team)
            <div class="col-md-3 col-sm-6">
                <div class="card-1 team-member">
                    <img src="{{ asset($team->image) ?? '' }}" alt="Team Member 1">
                    <p><b>{{ $team->title }}</b></p>
                </div>
            </div>
            @endforeach
            @endif


        </div>
    </div>

</div>
