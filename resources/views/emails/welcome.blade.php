@component('mail::message')
# Welcome to mailing course 

In this course you learn how to send an email.

@component('mail::button', ['url' => 'https://laravel.com/docs/9.x/mail#generating-markdown-mailables'])
Visit Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
