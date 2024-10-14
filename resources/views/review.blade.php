@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a Review</h1>
    
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="review" class="form-label">Your Review</label>
            <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Star Rating</label>
            <select class="form-select" id="rating" name="rating" required>
                <option value="" disabled selected>Select a rating</option>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>
@endsection
