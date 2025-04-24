<form action="{{route('user.update', $pengguna->id)}}" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="name" placeholder="Name" value="{{$pengguna->name}}">
  <button type="submit" value="Simpan">Submit</button>

  @error('name')
  <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
  @enderror
</form>

<!-- <input type="email" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password"> -->