@extends('base')
@section('content')
    
    <div class="container mt-3">
        <div class="table-responsive">
            <div class="mb-3">
                <input type="search" onkeyup="filterTable('search', 'itemsTable')" 
                class="form-control" id="search" placeholder="search..."/>
            </div>
            <table class="table table-borderless shadow" id="itemsTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        @if ($cat === 'clothes' || $cat === 'food' || $cat === 'others')
                        <th>Items</th>
                        @elseif($cat === 'funds')
                        <th>Amount(UGX)</th>
                        @elseif($cat === 'shoes')
                        <th>Pairs of Shoes</th>  
                        @endif
                        <th>Donated on</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection