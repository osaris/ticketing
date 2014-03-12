<h1>List of tickets</h1>
<p>{{ link_to_route('ticket.create', 'New') }}</p>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>ETA</th>
      <th>Urgent</th>  
      <th>State</th>    
    </tr>
  </thead>
  <tbody>
    @foreach($tickets as $ticket)
      <tr>
        <td>{{ link_to_route('ticket.show', $ticket->id, array('id' => $ticket->id)) }}</td>
        <td>{{ $ticket->eta }}</td>
        <td>{{ $ticket->urgent }}</td>  
        <td>{{ $ticket->state }}</td>    
      </tr>
    @endforeach
  </tbody>
</table>