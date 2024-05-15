@extends('admin.layout.index')
@section('content')
    
    <table class="table">
        <thead class="">
            <tr>
                <th>featured</th>
                <th>Danh mục</th>
                <th>branchID</th>
                <th>Mô tả</th>
               
              
            </tr>
        </thead>
        <tbody class="">
            
                <tr>
                    <td>{{ $product->featured }}</td>
                    <td>{{ $category->category }}</td>
                    <td>{{ $brand->brand}}</td>
                  
                    @php
                    $description = $product->description;
                    $descriptionWithLineBreaks = '';
                    $characterCount = strlen($description);
                    $lineBreakInterval = 30;

                    
                    for ($i = 0; $i < $characterCount; $i++) {
                        
                        $descriptionWithLineBreaks .= $description[$i];
                        if (($i + 1) % $lineBreakInterval === 0) {
                            $descriptionWithLineBreaks .= '<br>';
                        }
                    }
                @endphp

                <td>{!! $descriptionWithLineBreaks !!}</td>
              
               
           
       
        </tbody>
        
    </table>
    <a href="{{ route('san-pham.index') }}"><- Quay lại</a>
  
@endsection
