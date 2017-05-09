<!DOCTYPE html>
<html lang="en">
<style>
    * {
        font-family: sans-serif;
        font-size: 12px;
    }
    .logo h1 {
        font-family: sans-serif;
        font-size: 36px;
        margin: 0px;
        color: #2980b9;
        text-shadow: 1px 1px #CCCCCC;
    }
    .logo {
        text-align: center;
    }
    .logo span {
        font-size: 30px;
        font-style: italic;
        color: #848484;
    }
    .logo p{
        margin: 0px;
        color: #B1AEAE;
        padding: 0px;
        font-family: sans-serif;
        font-size: 12px;
        letter-spacing: 1px;
    }
    .row {
        overflow: hidden;
        clear: both;
    }
    .col-md-6 {
        width: 50%;
        float: left;
    }
    .address-company {
        text-align: right;
    }
    .address-company h4 {
        margin: 0px;
        padding: 0px;
    }
</style>
<body>
<table border="0" width="100%">
    <tr>
        <td class="logo">
            <h1>PUSAT KITAR SEMULA UKM<span></span></h1>
            <p>Kitar semula amalan bersama!</p>
        </td>
        <td class="address-company" style="text-align: right">
            <h4>Pusat Kitar Semula UKM </h4>
            <p style="margin-top: 0px;">
                Bandar Baru Bangi <br/>
                Malaysia<br/>
                <br/>
                T +33 555 444 333<br/><br/>
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="background: #F1F1F1;padding: 14px;">
            <h2 style="margin: 0px; padding: 0px;font-size: 20px;">ID Tempahan: D{{ $tempahan->id }}</h2>

        </td>
    </tr>
    <tr>
        <td><br></td>
        <td><br></td>
    </tr>
    <tr>
        <td>
            <b>Alamat penerima:</b><br>
            {{ Auth::user()->name }}<br>
            {{ Auth::user()->alamat}}<br>
        </td>

    </tr>
</table>
<br><br>
<table class="table table-bordered" border="1" style="border-collapse: collapse; width: 80%; border-color: #adadad;">
    <thead style="background: #EAEAEA;">
     <tr>
        <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;"> Nama Penjual  : </td>
        <td width="60%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;">{{ $tempahan->barang->seller->name}}</td>
    </tr>
    <tr>
       <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;"> No akaun Penjual : </td>
        <td width="60%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;"> {{ $tempahan->barang->seller->profile->no_akaun}}</td>
    </tr>
    <tr>
        <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;">No tel Penjual : </td>
        <td width="60%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;"> {{ $tempahan->barang->seller->profile->no_tel}}</td>
    </tr>
    </thead>

</table>
<br></br>

<table class="table table-bordered" border="1" style="border-collapse: collapse; width: 80%; border-color: #adadad;">
    <thead style="background: #EAEAEA;">
     <tr>
        <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;"> ID Barang :  </td>
        <td width="60%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;">{{ $tempahan->barang->id }}</td>
    </tr>
    <tr>
       <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;">Nama Barang : </td>
        <td width="60%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;"> {{ $tempahan->barang->nama }}</td>
    </tr>
    <tr>
        <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;">Kuantiti tempahan :  </td>
        <td width="60%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;"> {{ $tempahan->kuantiti }}</td>
    </tr>
     <tr>
        <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;">Jumlah : </td>
        <td width="60%" style="text-align: left; font-size: 18px; font-weight: bold; padding: 10px;">RM{{  number_format($tempahan->kuantiti * $tempahan->barang->harga, '2', '.', '')}}</td>
    </tr>
    </thead>

</table>

<br/><br/>
<table class="table table-bordered" border="1" style="border-collapse: collapse; width: 80%; border-color: #adadad;">
    <tbody>

    <tr>
        <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;">Tarikh Pembayaran : </td>
        <td width="60%" style="text-align: right; font-size: 18px; font-weight: bold; padding: 10px;">{{ $tempahan->pembayaran->created_at->format('d/m/Y g:ia') }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
