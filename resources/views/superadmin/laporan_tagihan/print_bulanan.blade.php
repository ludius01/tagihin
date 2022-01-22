<html>
<head>
	<title>Laporan Tagihan Bulan {{$bulan}} Tahun {{$th}}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Tagihan Bulanan</h4>
</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Tanggal Tagihan</th>
				<th>No Invoice</th>
				<th>Pelanggan</th>
				<th>Alat</th>
				<th>Paket</th>
				<th>Junlah Tagihan</th>
                <th>Kode Unik</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
		
		
			 @foreach($datas as $data)
                                <tr>
                                    <td class=" text-center">{{$data->tgl_tagihan}}</td>
                                    <td class=" text-center">{{$data->no_inv_tagihan}}</td>      
                                    <td class=" text-center">@foreach($pelanggans as $p)@if($p->id == $data->id_pelanggan){{$p->username}}@endif    @endforeach</td>
                                    <td class=" text-center">@foreach($alats as $a) @if($a->id == $data->id_alat){{$a->nama_alat}}@endif    @endforeach</td>
                                    <td class=" text-center">@foreach($pakets as $pa)@if($pa->id == $data->id_paket){{$pa->nama_paket}}@endif @endforeach</td>
                                    <td class=" text-center">{{$data->jumlah_bayar}}</td>
                                    <td class="text-center"> {{$data->kode_unik}}</td>
                                    <td class="text-center"> @if($data->status == 1) Sudah bayar @elseif($data->status == 2) Belum Bayar<@endif/td>
                                </tr>
                             @endforeach

		</tbody>
	</table>
 
</body>
</html>