<h1>New ticket</h1>
{{ Form::model($ticket, array('route' => 'ticket.store')) }}
  @include('tickets._form', array('ticket' => $ticket))
{{ Form::close() }}