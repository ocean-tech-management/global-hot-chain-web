@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.bonusTopUpPersonal.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.bonus-top-up-personals.update", [$bonusTopUpPersonal->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="point_package_id">{{ trans('cruds.bonusTopUpPersonal.fields.point_package') }}</label>
                    <select class="form-control select2 {{ $errors->has('point_package') ? 'is-invalid' : '' }}" name="point_package_id" id="point_package_id" required>
                        @foreach($point_packages as $id => $entry)
                            <option value="{{ $id }}" {{ (old('point_package_id') ? old('point_package_id') : $bonusTopUpPersonal->point_package->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('point_package'))
                        <div class="invalid-feedback">
                            {{ $errors->first('point_package') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.bonusTopUpPersonal.fields.point_package_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="first_upline_bonus">{{ trans('cruds.bonusTopUpPersonal.fields.first_upline_bonus') }}</label>
                    <input class="form-control {{ $errors->has('first_upline_bonus') ? 'is-invalid' : '' }}" type="number" name="first_upline_bonus" id="first_upline_bonus" value="{{ old('first_upline_bonus', $bonusTopUpPersonal->first_upline_bonus) }}" step="0.01" required>
                    @if($errors->has('first_upline_bonus'))
                        <div class="invalid-feedback">
                            {{ $errors->first('first_upline_bonus') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.bonusTopUpPersonal.fields.first_upline_bonus_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="second_upline_bonus">{{ trans('cruds.bonusTopUpPersonal.fields.second_upline_bonus') }}</label>
                    <input class="form-control {{ $errors->has('second_upline_bonus') ? 'is-invalid' : '' }}" type="number" name="second_upline_bonus" id="second_upline_bonus" value="{{ old('second_upline_bonus', $bonusTopUpPersonal->second_upline_bonus) }}" step="0.01" required>
                    @if($errors->has('second_upline_bonus'))
                        <div class="invalid-feedback">
                            {{ $errors->first('second_upline_bonus') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.bonusTopUpPersonal.fields.second_upline_bonus_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
