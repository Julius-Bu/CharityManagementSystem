@extends('users.base')
@section('content')
    
    <div class="container mt-3">
        <div class="jumbotron py-1">
            Dashboard >> Donations >> <span class="text-primary">{{ strtoupper($cat)}} Donations</span>
        </div>
        <div class="table-responsive">
            <table class="table table-borderless shadow" id="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        @if ($cat === 'clothes' || $cat === 'food' || $cat === 'others')
                        <th>Items</th>
                        @elseif($cat === 'funds')
                        <th>Amount (UGX)</th>
                        @elseif($cat === 'shoes')
                        <th>Pairs of Shoes</th>  
                        @endif
                        <th>Donated on</th>
                        <th>Is Public</th>
                    </tr>

                    <tbody>
                        @php $no = 0; @endphp
                        @foreach ($collection as $item)
                            @php $no++; @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->first_name . " " . $item->last_name }}</td>
                                <td>
                                    @if ($cat === 'clothes' || $cat === 'food' || $cat === 'others')
                                        @php $category = explode(',', $item->categories) @endphp
                                        @foreach ($category as $catItem)
                                            <span class="badge badge-primary">{{ $catItem }}</span>
                                        @endforeach
                                        @elseif($cat === 'shoes')
                                        {{ $item->quantity }} Pairs
                                    @elseif($cat === 'funds')
                                    {{ number_format($item->amount) }}
                                    @endif
                                </td>
                                <td>{{ date('D d M Y', strtotime($item->donated_at)) }}</td>
                                @if ($cat === 'funds')
                                <td>{{ $item->is_anonymous == 1 ? "YES" : "NO" }}</td>
                                @else
                                <td>{{ $item->is_public == 1 ? "YES" : "NO" }}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection