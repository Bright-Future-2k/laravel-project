{!! Form::label('tag', trans('global.articles.fields.tag').'', ['class' => 'control-label']) !!}
<button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
    {{ trans('global.app_select_all') }}
</button>
<button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
    {{ trans('global.app_deselect_all') }}
</button>
{!! Form::select('tag[]', $tags, old('tag') ? old('tag') : $article->tag->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-tag' ]) !!}
<p class="help-block"></p>
@if($errors->has('tag'))
    <p class="help-block">
        {{ $errors->first('tag') }}
    </p>
@endif
