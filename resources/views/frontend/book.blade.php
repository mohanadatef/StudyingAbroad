@extends('includes.frontend.master_frontend')
@section('title')
    Book
@endsection
@section('content')


    <section id="book-content-section">
        <div class="book-form-background">
            <div class="container">

                <div class="row" style="margin: 0 !important">
                    <div class="col-md-6">
                        <h2 class="book-head-title">{{ trans('lang.Fill') }}</h2>
                        <img src="{{url('public/assets/imgs/Pic2.png')}}" class="book-img-size"/>
                    </div>
                    <div class="col-md-6">
                        @include('includes.admin.error')
                        <form action="{{url('/book')}}" method="POST" class="book-form-content needs-validation"
                              novalidate>
                            {{csrf_field()}}
                            <div class="book-form">
                                <!-- Name section -->
                                <div class="form-group {{ $errors->has('full_name') ? ' has-error' : "" }}">
                                    <label class="book-form-label" for="full_name">{{ trans('lang.Full_Name') }}
                                    </label>
                                    <input type="text" required value="{{Request::old('full_name')}}"
                                           name="full_name" class="form-control book-form-input" id="full_name">
                                    <div class="invalid-feedback">
                                        {{ trans('lang.error_Full_Name') }}
                                    </div>
                                </div>
                                <!-- Email section -->
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : "" }}">
                                    <label for="inputEmail"
                                           class="book-form-label"> {{ trans('lang.Email') }}</label>
                                    <input type="text" value="{{Request::old('email')}}" name="email"
                                           class="form-control book-form-input" id="inputEmail" required>
                                    <div class="invalid-feedback">
                                        {{ trans('lang.error_email') }}
                                    </div>
                                </div>
                                <!-- country & phone section -->
                                <div class="form-row">
                                    <div class="form-group col-md-6 {{ $errors->has('phone') ? ' has-error' : "" }}">
                                        <label for="inputPhone"
                                               class="book-form-label">{{ trans('lang.Phone') }}</label>
                                        <input type="text" value="{{Request::old('phone')}}" name="phone"
                                               class="form-control book-form-input" id="inputPhone" required>
                                        <div class="invalid-feedback">
                                            {{ trans('lang.error_phone') }}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 {{ $errors->has('country_id') ? ' has-error' : "" }}">
                                        <label for="country_id"
                                               class="book-form-label">{{ trans('lang.Country') }}</label>
                                        <select id="country_id" name="country_id" type="country_id"
                                                class="form-control book-form-input" required>
                                            <option value="" selected disabled> {{ trans('lang.Select') }}</option>
                                            @foreach($country_book as $key => $mycountry)
                                                <option value="{{$key}}"> {{$mycountry}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ trans('lang.error_country') }}
                                        </div>
                                    </div>
                                </div>
                                <!-- Programs -->
                                <div class="form-group {{ $errors->has('program_id') ? ' has-error' : "" }}">
                                    <label for="program_id"
                                           class="book-form-label">{{ trans('lang.Programs') }}</label>
                                    <select id="program_id" name="program_id" type="program_id"
                                            class="form-control book-form-input" required>
                                        <option value="" selected disabled>{{ trans('lang.Select') }}</option>
                                        @foreach($program_book as $key => $myprogram)
                                            <option value="{{$key}}"> {{$myprogram}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ trans('lang.error_program') }}
                                    </div>
                                </div>
                                <!-- Services -->
                                <div class="form-group">
                                    <label for="service_id"
                                           class="book-form-label">{{ trans('lang.Services') }}</label>
                                    <div class="boxes" name="service[]" id="service_id" multiple='multiple'
                                         type="service_id">
                                        @foreach($service_book as $key => $myservice)
                                            <input type="checkbox" name="service[]" id="{{$key}}" value="{{$key}}">
                                            <label for="{{$key}}">{{$myservice}}</label>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- country & phone section -->
                                <div class="form-row">
                                    <div class="form-group col-md-6 {{ $errors->has('english_level') ? ' has-error' : "" }}">
                                        <label for="english_level"
                                               class="book-form-label">{{ trans('lang.English_Level') }}</label>
                                        <select id="english_level" name="english_level"
                                                class="form-control book-form-input" required>
                                            <option value="">{{ trans('lang.Select') }}</option>
                                            <option value="level A1">level A1</option>
                                            <option value="level A2">level A2</option>
                                            <option value="level B1">level B1</option>
                                            <option value="level B2">level B2</option>
                                            <option value="level C1">level C1</option>
                                            <option value="level C2">level C2</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ trans('lang.error_program') }}

                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 {{ $errors->has('country_level') ? ' has-error' : "" }}">
                                        <label for="country_level"
                                               class="book-form-label">{{ trans('lang.Country_Language') }}</label>
                                        <select id="country_level" name="country_level"
                                                class="form-control book-form-input" required>
                                            <option value="">{{ trans('lang.Select') }}</option>
                                            <option value="level A1">level A1</option>
                                            <option value="level A2">level A2</option>
                                            <option value="level B1">level B1</option>
                                            <option value="level B2">level B2</option>
                                            <option value="level C1">level C1</option>
                                            <option value="level C2">level C2</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ trans('lang.error_language') }}
                                        </div>
                                    </div>
                                </div>
                                <!-- data-target="#exampleModalCenter" -->
                                <button type="submit" data-toggle="modal" id="bookbtnId"
                                        class="btn btn-primary btn-lg btn-block book-btn-lg">{{ trans('lang.Book') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="book-modal-message">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h2 class="book-modal-title "><span class="book-modal-title-span">Success!</span></h2>
                        <h2 class="book-modal-span"><i class="fas fa-check-circle"></i></h2>
                        <p class="book-modal-mes-detail">{{ trans('lang.message_book') }}</p>
                    </div>
                    <div class="modal-footer" style="justify-content: center;border: none;">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                        <button type="button" class="btn btn-primary"
                                style="min-width: 100px;background: #00adef;border:none;"
                                data-dismiss="modal">{{ trans('lang.OK') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-1')
    <script>
        selectItem("book");
    </script>
    @if($check > 0)
        <script>
            $(document).ready(function () {
                $('#exampleModalCenter').modal('show');
            });
        </script>
    @endif
@endsection