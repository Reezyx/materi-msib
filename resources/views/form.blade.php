<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Amandemy</title>
</head>

<body>
    @if (Session::has('error'))
        <p>{{ Session::get('error') }}</p>
    @endif
    <form action="{{ route('send_request') }}?status=true&action=hold" method="POST">
        @csrf()
        <h1>Form Pengisian Data Peserta</h1>
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">NIM</label>
            <input type="text" name="nim">
        </div>
        <div>
            <label for="">Nama Sekolah</label>
            <input type="text" name="school">
        </div>
        <div>
            <label for="">Umur</label>
            <input type="number" name="umur">
        </div>
        <div>
            <label for="">Jenjang</label>
            <select name="jenjang" id="">
                <option selected>Pilih Jenjang Perguruan</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
            </select>
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
