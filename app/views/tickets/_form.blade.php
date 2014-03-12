<p>
  {{ Form::label('eta', 'ETA') }} 
  {{ Form::text('eta', $ticket->eta) }}
</p>
<p>
  {{ Form::label('urgent', 'Urgent') }} 
  {{ Form::checkbox('urgent', $ticket->urgent) }}
</p>
<p>
  {{ Form::label('state', 'State') }}     
  {{ Form::select('state', array('open' => 'open', 'closed' => 'closed')) }}
</p>
<p>
  {{ Form::label('description', 'Description') }}     
  {{ Form::textarea('description', $ticket->description) }}
</p>
<p>
  {{ Form::submit('Save') }}
</p>