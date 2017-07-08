{{-- Show the inputs --}}
@foreach ($fields as $field)
    <!-- load the view from the application if it exists, otherwise load the one in the package -->
    @if(view()->exists('vendor.lecuong.crud.fields.'.$field['type']))
        @include('vendor.lecuong.crud.fields.'.$field['type'], array('field' => $field))
    @else
        @include('crud::fields.'.$field['type'], array('field' => $field))
    @endif
@endforeach