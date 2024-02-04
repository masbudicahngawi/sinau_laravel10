@include('header')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<h3>Daftar Lagu</h3>

<a href="{{ route('lagu.tambah') }}">Tambah Lagu</a>

<table class="table table-bordered table-sm table-dark table-striped table-condensed">
  <tr>
    <th class="text-center">No</th>
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
    {{-- <td class="text-center">{{$urut}}</td> --}}
    <td class="text-center">{{ $key+ $lagus->firstItem() }}</td>
    <td>{{$lagu->judul}}</td>
    <td>{{$lagu->penyanyi}}</td>
    <td>{{$lagu->genre->nama}}</td>
    <td>{{$lagu->deskripsi}}</td>
    <td>{{$lagu->user->name}}</td>
    <td>
      <a class="btn btn-primary btn-sm rounded-0" href="{{ route('lagu.edit',$lagu->id) }}">Edit</a>

      <form class="delete" action="{{ route('lagu.destroy', $lagu->id) }}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete">
      </form>

    </td>
  </tr>
  <?php $urut++;?>
  @endforeach

</table>

<div class="d-flex justify-content-center">
  {{-- {!! $lagus->links() !!} --}}
  {!! $lagus->withQueryString()->links('pagination::bootstrap-5') !!}
</div>


@include('footer')