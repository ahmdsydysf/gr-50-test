@if (session()->has('MsgStatus'))


<div class="alert alert-{{ $clr ?? 'info'}}" role="alert">
    {{ session()->get('MsgStatus') }} &&--&& {{ $message ?? 'ay l=klaaam default msg' }} &&--&& {{ $title ?? 'default
    title'}}
</div>

{{ $slot }}
{{ $in_side_slot ?? 'nothing' }}
@endif