<!DOCTYPE html>
<html>
<head>
    <title>Tambah Wali Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, select, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Tambah Wali Siswa</h2>
        <form method="POST" action="{{route('wali_murid.store')}}">
            @csrf
            <label>Nama Wali:</label>
            <input type="text" name="nama_wali" required>
            
            <label>Kontak:</label>
            <input type="text" name="kontak" required>
            </select>
            <button type="submit" name="tambah_wali">Tambah Wali Siswa</button>
        </form>
    </div>
</body>
</html>