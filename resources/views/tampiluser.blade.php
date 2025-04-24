<table>
  <tr>
    <th>Nama</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  @foreach ($orang as $row)
  <tr>
    <td>{{ $row->name }}</td>
    <td>{{ $row->email }}</td>
    <td>
      <a href="{{ route('user.edit', $row->id) }}">Edit</a>
      <form action="{{ route('user.destroy', $row->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>