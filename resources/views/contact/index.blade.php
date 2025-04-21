<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projek RRV</title>
</head>

<body>
    <h2>Form tambah contact</h2>
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="number" name="noHp" placeholder="Masukan Nomor Hp" value="{{ old('noHp') }}"><br>
        <input type="text" name="message" placeholder="Masukan Message/pesan "><br>
        <button type="submit">Simpan</button>
        <a href="/user/create"><button type="button">create user</button></a>
    </form>
</body>

</html>
