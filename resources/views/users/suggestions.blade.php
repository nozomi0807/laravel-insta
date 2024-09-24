{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h3>Suggested Users</h3>
    
    <div class="list-group">
        @foreach ($suggestedUsers as $user)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <a href="{{ route('profile', ['id' => $user->id]) }}">
                        <img src="{{ $user->avatar_url }}" alt="Avatar" class="avatar-md rounded-circle">
                    </a>
                    
                    <!-- User Info -->
                    <div class="ml-3">
                        <a href="{{ route('profile', ['id' => $user->id]) }}" class="font-weight-bold">
                            {{ $user->name }}
                        </a>
                        
                        <!-- Subtitle -->
                        <p class="xsmall text-muted">
                            @if ($user->followers->contains(auth()->user()))
                                Follows you
                            @elseif ($user->followers->count() === 0)
                                No followers yet
                            @else
                                {{ $user->followers->count() }} {{ Str::plural('follower', $user->followers->count()) }}
                            @endif
                        </p>
                    </div>
                </div>
                
                <!-- Follow Button -->
                <div>
                    <form action="{{ route('follow', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Follow</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection --}}