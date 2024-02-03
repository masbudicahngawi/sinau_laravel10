@include('header')

<h5>Editing Page</h5>

<form method="POST" action="{{ route('lagu.proses.edit', $datanya->id) }}">
	@csrf
	@method('PUT')
	
	<div class="mb-3">
		<label for="judul" class="form-label">Judul</label>
		<input type="text" class="form-control rounded-0" name="judul" value="{{ $datanya->judul }}">
	</div>
	<div class="mb-3">
		<label for="penyanyi" class="form-label">Penyanyi</label>
		<input type="text" class="form-control rounded-0" name="penyanyi" value="{{ $datanya->penyanyi }}">
	</div>
	<div class="mb-3">
		<label for="genre" class="form-label">Genre</label>
		<select class="form-select rounded-0" aria-label="Default select example" id="genre_id" name="genre_id" required>
			<option disabled>Pilih Genre</option>

			@foreach($all_genre as $genre)

			<option value="{{ $genre->id }}">{{ $genre->nama }}</option>

			@endforeach

		</select>
	</div>
	<div class="mb-3">
		<label for="deskripsi" class="form-label">Deskripsi</label>
		<textarea class="form-control rounded-0" id="deskripsi" name="deskripsi" value="" 
		rows="3" required>{{ $datanya->deskripsi }}</textarea>
	</div>

	<button type="submit" class="btn btn-primary rounded-0">Simpan</button>
</form>

@include('footer')