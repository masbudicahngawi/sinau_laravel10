<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }

    h4.center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<h4 class="center">Daftar Data</h4>

<table class="center">
    <tr>
        <td>ID</td>
        <td>JUDUL</td>
        <td>DESKRIPSI</td>
        <td>KATEGORI</td>
        <td>PENULIS</td>
    </tr>

    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->user->name }}</td>
        </tr>
    @endforeach
</table>
