<div class="panel-body table-responsive">
    <table class="table table-bordered table-striped datatable">
        <a href="{{ route('admin.articles.create') }}" class="btn btn-outline-secondary">Create</a>
        <thead>
        <tr>
            <th>Title</th>
            <th>Tags</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        @if (count($articles) > 0)
            @foreach ($articles as $article)
                <tr data-entry-id="{{ $article->id }}">
                    <td field-key='title'>{{ $article->title }}</td>
                    <td field-key='tag'>
                        @foreach ($article->tag as $singleTag)
                            <span class="label label-info label-many">{{ $singleTag->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        {{--                        @can('article_view')--}}
                        {{--                            <a href="{{ route('admin.articles.show',[$article->id]) }}" class="btn btn-xs btn-primary">View</a>--}}
                        {{--                        @endcan--}}
                        @can('article_edit')
                            <a href="{{ route('admin.articles.edit',[$article->id]) }}"
                               class="btn btn-xs btn-info">Edit</a>
                        @endcan
                        @can('article_delete')
                            {!! Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('Are you sure?');",
                                'route' => ['admin.articles.destroy', $article->id])) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
