
<form action="{{ route('orders.update',$order->id) }}" method="POST" id="form" onsubmit="submitForm(event,this)">
    <input type="hidden" name="_method" value="PUT">
    @include('control_panel.orders.form')
</form>