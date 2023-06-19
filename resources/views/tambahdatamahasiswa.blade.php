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
    </head>
    <body>
        <h1 class="text-center mb-4">Tambah Data Mahasiswa</h1>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form
                        action="/inputdata"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputNIM1" class="form-label"
                                >NIM</label
                            >
                            <input
                                type="text"
                                name="nim"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputPassword1"
                                class="form-label"
                                >Nama</label
                            >
                            <input
                                type="text"
                                name="nama"
                                class="form-control"
                                id="exampleInputPassword1"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputPassword1"
                                class="form-label"
                                >Jurusan</label
                            >
                            <input
                                type="text"
                                name="jurusan"
                                class="form-control"
                                id="exampleInputPassword1"
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputPassword1"
                                class="form-label"
                                >Email</label
                            >
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                id="exampleInputPassword1"
                            />
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
