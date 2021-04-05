
@extends("templates.main")
@section("content")

<div class="row">
    <div class="col-3">
        <form method="POST" action="/periods">
            @csrf
            <div class="form-group">
                <label for="name">Period Name</label>
                <input type="text" class="form-control" name="name" id="name" />
            </div>
            <div class="form-group">
                <label for="month">Period Month</label>
                <input type="date" class="form-control" name="month" id="month" />
            </div>
            <button class="btn btn-primary">Create New Period</button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col">
        <br/>
        @if (count($periods) === 0)
            <h2>No periods!</h2>
        @else
            @foreach ($periods as $period)
                {{ $period->name }} - {{ date('M Y', strtotime($period->month)) }}
                <br/>
            @endforeach
        @endif
    </div>
</div>

@endsection