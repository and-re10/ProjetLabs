@component('mail::message')
# Introduction
## Sous-titre
Email: {{$sendMessage->email}}  
Nom: {{$sendMessage->name}}  
Sujet: {{$sendMessage->subject}}  
Message: {{$sendMessage->message}}  

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
