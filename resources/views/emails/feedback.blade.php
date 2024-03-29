<x-mail::message>
# Greetings, You have an Inquiry!

<h3>Concern: {{ $data['issue'] }}</h3>
<h3>Details: {{ $data['details'] }}</h3>

@if(isset($data['photo']))
    <h3>Photo:</h3>
    <img src="{{ $data['photo'] }}" alt="Uploaded Photo" style="max-width: 100%; height: auto;">
@endif

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
