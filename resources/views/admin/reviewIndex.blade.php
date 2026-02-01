@extends('admin.dashboard')

@section('judulAdmin')
    Halaman Data Review
@endsection

@section('contentAdmin')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Review/Komentar Kafe</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">User</th>
                    <th scope="col">Kafe</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Komentar</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reviews as $key=>$review)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$review->user->name ?? 'User tidak ditemukan'}}</td>
                        <td>{{$review->cafe->nama ?? 'Kafe tidak ditemukan'}}</td>
                        <td>
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review->rating)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-muted"></i>
                                @endif
                            @endfor
                            ({{$review->rating}}/5)
                        </td>
                        <td>
                            <div style="max-width: 250px; word-wrap: break-word;">
                                {{$review->komentar}}
                            </div>
                        </td>
                        <td>{{$review->created_at->format('d/m/Y H:i')}}</td>
                        <td>
                            <form action="/table-review/{{$review->id}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus review ini?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada review</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection