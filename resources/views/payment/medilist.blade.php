@extends('payment.navigation')

@section('contents')
<div class="list-container">
@foreach($medicine as $medicines)
<div class="medi-list">
    <div class="imgae">
        <img src="{{ asset('image/front-main-with-ingredients-1-500x500.jpg') }}" alt="">
    </div>
    <div class="details">
        <div class="name">
            <span>Name::</span><p>{{ $medicines->name }}</p>
        </div>
        <div class="price">
            <span>Price::</span><p>Rs.{{  $medicines->price }}</p>
        </div>
        <div class="add-cart">
            <a class="add-carts">
                <p class="m_id">{{ $medicines->id }}</p>
                <span>add to cart</span>
            </a>
        </div>

    </div>
</div>
@endforeach
</div>

<script>
    $(function(){

        var URL="{{ url('/') }}/cart/medicine/";
        $('.add-carts').click(function(){
            var index=$('.add-carts').index(this);
            var text=$('.m_id').eq(index).text();
            //alert(text);
            $.ajax({
             url:URL+text,
             headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},
             success:function(response)
             {
                 console.log(response);
                 window.location.reload();
             }
            })
        })
    })
</script>
@endsection
