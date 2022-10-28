<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<br>
<div class="container" style="margin-left:auto; margin-right:auto; width: 50%;">
    <div class="card" style="width: auto;">
        <div class="card-header">
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <span id="card_title" >
                    <h3>Pendaftaran Siswa</h3>
                </span>
                <div class="float-right">
                    <h2><a href="{{ route('pendaftaran.index') }}" class="btn btn-primary btn-sm">Kembali</a></h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="{{ route('pendaftaran.store') }}"
                    role="form" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Nama </strong></td>
                            <td>{{ Form::text('nama', null,['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Alamat</strong></td>
                            <td>{{ Form::text('alamat', null,['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Lahir </strong></td>
                            <td>{{ Form::date('tanggal_lahir'), null,['class' => 'form-control']}}</td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin </strong></td>
                            <td>
                                {!! Form::radio('jenis_kelamin', 'L', true) !!} Laki-Laki
                                {!! Form::radio('jenis_kelamin', 'P') !!} Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Asal Sekolah </strong></td>
                            <td>{{ Form::text('asal_sekolah', null,['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Agama </strong></td>
                            <td>
                                {{ Form::select('agama_id',\App\Models\Pendaftaran::listAgama(),['class' => 'form-control']) }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Nilai Indonesia </strong></td>
                            <td>{{ Form::number('nilai_ind', null, ['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Nilai IPA </strong></td>
                            <td>{{ Form::number('nilai_ipa', null, ['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Nilai MTK </strong></td>
                            <td>{{ Form::number('nilai_mtk', null, ['class' => 'form-control']) }}</td>
                        </tr>
                    </table>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"  style="width: 100%">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
