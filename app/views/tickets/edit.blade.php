<h1>Edit ticket</h1>
{{ Form::model($ticket, array('route' => 'ticket.update')) }}
  @include('tickets._form', array('ticket' => $ticket))
{{ Form::close() }}