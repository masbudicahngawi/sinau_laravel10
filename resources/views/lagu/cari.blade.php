@include('header')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<h5>Pencarian Lagu</h5>

<a href="{{ route('lagu.tambah') }}">Tambah Lagu</a>

<form action="{{ route('lagu.cari') }}" method="get">
  <div class="row">
    <div class="col-md-10">
      <input type="text" class="form-control mb-3 rounded-0" placeholder="Ketikkan kata kunci judul" name="q">
    </div>
    <div class="col-md-2">
      <input type="submit" class="form-control mb-3 rounded-0 btn btn-primary" value="Cari">
    </div>
  </div>
</form>

<table class="table table-bordered table-sm table-dark table-striped">
  <tr>
    <th class="text-center">ID</th>
    <th class="text-center">Judul</th>
    <th class="text-center">Penyanyi</th>
    <th class="text-center">Genre</th>
    <th class="text-center">Deskripsi</th>
    <th class="text-center">Uploader</th>
    <th class="text-center">Aksi</th>
  </tr>

  <?php $urut = 1; ?>
  @foreach ($lagus as $key=>$lagu)
  <tr>
    <td class="text-center">{{ $key+ $lagus->firstItem() }}</td>
    <td>{{$lagu->judul}}</td>
    <td>{{$lagu->penyanyi}}</td>
    <td>{{$lagu->genre->nama}}</td>
    <td>{{$lagu->deskripsi}}</td>
    <td>{{$lagu->user->name}}</td>
    <td>
      <form action="{{ route('lagu.destroy',$lagu->id) }}" method="POST">
        <a class="btn btn-primary btn-sm rounded-0" href="{{ route('lagu.edit',$lagu->id) }}">Edit</a>
        @csrf
        {{-- @method('DELETE') --}}
        <button type="submit" class="btn btn-danger btn-sm rounded-0">Delete</button>
      </form>

    </td>
  </tr>
  <?php $urut++;?>
  @endforeach

</table>

<div class="d-flex justify-content-center">
  {!! $lagus->withQueryString()->links('pagination::bootstrap-5') !!}
</div>


@include('footer')