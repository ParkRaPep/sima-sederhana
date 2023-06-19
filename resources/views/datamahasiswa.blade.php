<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>sima-sederhana</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body>
        <h1 class="text-center mb-4">Data Mahasiswa</h1>

        <div class="container">
            <a href="/tambahmahasiswa" class="btn btn-success">Tambah</a>
            <div class="mb-3 mt-3">
                <form action="/mahasiswa" method="GET">
                    <input
                        type="search"
                        class="form-control"
                        id="exampleInputPassword1"
                        name="search"
                        placeholder="Cari nama mahasiswa"
                    />
                </form>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp @foreach ($data as $index => $row)
                        <tr>
                            <th scope="row">
                                {{ $index + $data->firstItem() }}
                            </th>
                            <td>{{ $row->nim }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jurusan }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->created_at->format('D M Y') }}</td>
                            <td>
                                <a
                                    href="/tampildata/{{ $row->id }}"
                                    class="btn btn-warning"
                                >
                                    Ubah
                                </a>
                                <a
                                    href="#"
                                    class="btn btn-danger delete"
                                    data-id="{{ $row->id }}"
                                    data-nim="{{ $row->nim }}"
                                >
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"
        ></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
    </body>
    <script>
        $(".delete").click(function () {
            var mahasiswaid = $(this).attr("data-id");
            var nim = $(this).attr("data-nim");
            swal({
                title: "Kamu Yakin?",
                text:
                    "Kamu akan menghapus data mahasiswa dengan NIM : " +
                    nim +
                    " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location = "/hapusdata/" + mahasiswaid + "";
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Batal menghapus data");
                }
            });
        });
    </script>
    <script>
        @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
</html>
