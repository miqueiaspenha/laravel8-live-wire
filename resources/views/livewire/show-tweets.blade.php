<div>
    Show Tweets
    <p>{{ $message }}</p>
    <input type="text" wire:model="message">

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
</div>
