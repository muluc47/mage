@extends('layouts.contentLayoutMaster')

@section('content')
<section id="description" class="card">
    <div class="card-header">
      <h4 class="card-title">{{ $wizardTitle }}</h4>
    </div>
    <div class="card-content">
      <div class="card-body">


                <div class="mb-3">
                    @include($getViewPath('steps_bar'))
                </div>

                <form action="{{ $getActionUrl($postAction, [$step->slug()]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include($step->view(), compact('step', 'errors'))

                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            @if ($stepRepo->hasPrev())
                                <button type="button" class="btn btn-primary" onclick="this.form.action = '{{ $getActionUrl($postAction, [$step->slug(), '_trigger' => 'back']) }}'; this.form.submit();">
                                    @lang('wizard::generic.back')
                                </button>
                            @endif
                        </div>

                        <div class="ml-auto">
                            @if ($stepRepo->hasNext())
                                <button type="submit" class="btn btn-primary">
                                    @lang('wizard::generic.next')
                                </button>
                            @else
                                <button type="submit" class="btn btn-primary">
                                    @lang('wizard::generic.done')
                                </button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection
