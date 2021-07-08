@component('mail::message')
# Congratulations 

Your Booking Created Successfully.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
See More
@endcomponent

Thanks,<br>
JP Express
@endcomponent