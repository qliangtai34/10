@extends('layouts.app')

@section('title', '勤怠詳細')

@section('content')

<h1>{{ $attendance->date }} の勤怠詳細</h1>

<p><strong>出勤：</strong> {{ $attendance->clock_in ?? '' }}</p>
<p><strong>退勤：</strong> {{ $attendance->clock_out ?? '' }}</p>

<h2>休憩一覧</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>休憩開始</th>
            <th>休憩終了</th>
        </tr>
    </thead>
    <tbody>
        @foreach($attendance->breaks as $break)
        <tr>
            <td>{{ $break->break_start }}</td>
            <td>{{ $break->break_end ?? '' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('attendance.list') }}">← 一覧へ</a>

@endsection
