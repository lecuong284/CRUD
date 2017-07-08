@if (method_exists($crud->model, 'isTranslatableAttribute') && $crud->model->isTranslatableAttribute($field['name']) && config('lecuong.crud.show_translatable_field_icon'))
<i class="fa fa-flag-checkered pull-{{ config('lecuong.crud.translatable_field_icon_position') }}" style="margin-top: 3px;" title="This field is translatable."></i>
@endif