<table>
  <tr>
    <th>Nama</th>
    <th>Email</th>
  </tr>
  @foreach ($orang as $row)
  <tr>
    <td>{{ $row->name }}</td>
    <td>{{ $row->email }}</td>
  </tr>
  @endforeach
</table>