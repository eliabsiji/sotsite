<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">

</x-mail::header>
</x-slot:header>

{{-- Body --}}

<h2>Hello, Adrah Studios, my name is {{ $details['name'] }}</h2>
<br>

<strong>User details: </strong><br>
<strong>Name: </strong>{{ $details['name'] }} <br>
<strong>Email: </strong>{{ $details['email'] }} <br>
<strong>Instagram Handle: </strong>{{ $details['instagram'] }} <br>
<strong>Event: </strong>{{ $details['event'] }} <br>
<strong>Others: </strong>{{ $details['specify'] }} <br>
<strong>Phone: </strong>{{ $details['phone']}} <br>
<strong>Subject: </strong>{{ $details['subject'] }} <br>
<strong>Message: </strong>{{ $details['message'] }} <br><br>

Thank you
{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} Adrah Studios. @lang('All rights reserved.')
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
