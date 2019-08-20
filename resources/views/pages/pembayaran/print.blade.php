<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    #print {
      background-color: #eee;
      width: 80%;
      margin: auto;
      border: 1px solid black;
    }

    .center {
      text-align: center;
    }

    .flex {
      display: flex;
      margin: 1rem;
    }

    .flex-left {
      margin-right: auto;
    }

    .flex-right {
      text-align: end;
    }

    .flex-right p {
      /* margin: 2rem; */
    }

    .flex-right .penerima p {
      margin-right: 0;
      text-align: center;
    }

    .penerima {
      margin-top: 2rem;
    }

    @media print {
      @page {
        margin: 2cm;
      }

      .center {
        text-align: center;
      }

      .flex {
        display: flex;
      }

      .flex-left {
        margin-right: auto;
      }

      .flex-right {
        text-align: end;
      }

      .penerima {
        margin-top: 4rem;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div id="print">
    <h3 class="center">Kwitansi</h3>
    <div class="flex">
      <div class="flex-left">
        <p>No Bayar</p>
        <p>Sudah diterima dari</p>
        <p>Daftar jenis bayar</p>
        <p>Spp</p>
        <p>Jumlah Pembayaran</p>
      </div>
      <div class="flex-right">
        <p>Kode</p>
        <p>{{$siswa->nama}}</p>
        <p>Uang bayar</p>
        <p>Rp. {{$siswa->kelas->nominal->jumlah}}</p>
        <p>Rp. {{$siswa->kelas->nominal->jumlah}}</p>
        <div class="penerima">
          <p>Jakarta {{Carbon\Carbon::now()->toDateString()}} </p>
          <p>TDD</p>
          <p>{{$siswa->nama}}</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
