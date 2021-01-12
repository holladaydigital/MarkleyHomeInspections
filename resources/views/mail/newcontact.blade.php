@component('mail::message')
# New Contact Received #

Keith, you've received a new contact from your website.
<br>
Name: **{{$contact->name}}**
<br>
Email: **{{$contact->email}}**
<br>
Phone: **{{$contact->phone}}**
<br>
### They attached the following message: ###
> *{{$contact->message}}*

@endcomponent
