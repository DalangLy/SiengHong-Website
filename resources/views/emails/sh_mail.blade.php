@component('mail::message')
    # User Sign Up Information


    # Login Type : {{$data['login_type']}}

    @if($data['login_type'] == 'Login via Facebook')
        Name : {{$data['name']}}
        Email : {{$data['email']}}
        Phone : {{$data['phone_number']}}
    @else
        Name : {{$data['name']}}
        Phone : {{$data['phone']}}
        Email : {{$data['email']}}
        Interest In : {{$data['land_or_house']}}
    @endif

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
