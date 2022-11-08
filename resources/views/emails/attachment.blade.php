@component('mail::message')
# Sending an Attachment

This is how to send an attachment.

@component('mail::button', ['url' => 'https://mailtrap.io/inboxes/1901981/messages/3031211273'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
