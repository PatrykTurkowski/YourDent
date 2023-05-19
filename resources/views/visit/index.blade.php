@extends('layouts.main')
@section('links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/visit.js'])
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')

    <main class="visit">

        <div class="wrapper">
            <div class="visit__main-box">
                <div class="visit__background-img"></div>
                <div class="visit__background-shadow"></div>
                <div class="visit__container">
                    <form>
                        <h1 class="visit__title">{{ __('visit.make_visit') }}</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="visit__select-box">
                            <label for="doctors" class="visit__label"><i
                                    class="fa-solid fa-user-doctor visit__icon"></i>{{ __('visit.choose_a_doctor') }}</label>
                            <select name="doctor_id" class="visit__select visit__select--doctors" id="doctor_id">
                                <option value=''>Wybierz lekarza</option>
                                @foreach ($doctors as $doctor)
                                    <option class="visit__option" value="{{ $doctor->id }}"
                                        {{ $doctor_id == $doctor->id ? 'selected' : '' }}>
                                        {{ $doctor->name }}</option>
                                @endforeach
                            </select>
                            <p class="visit__alert visit__alert--doctors">
                                {{ __('visit.please_choose_a_doctor
                                                                                                                                ') }}
                            </p>
                        </div>

                        <div class="visit__date-box">
                            <div class="visit__date-day">
                                <div class="visit__date-day-box">
                                    <i class="fa-regular fa-calendar-days visit__icon"></i>
                                    <h4 class="visit__label">{{ __('visit.choose_a_term') }}</h4>
                                </div>
                                <div class="visit__date-inputs-box">
                                    <label for="time"
                                        class="visit__label">{{ __('visit.show_free_term_from') }}:</label>
                                    <input type="date" id="time" name="start_day" value="{{ $start_day }}"
                                        class="visit__input-date visit__select" />
                                    <label for="timeEnd"
                                        class="visit__label visit__label--do">{{ __('visit.to') }}:</label>
                                    <input type="date" id="timeEnd" name="end_day" value="{{ $end_day }}"
                                        class="visit__input-date visit__select" />
                                    <p class="visit__alert visit__alert-date">{{ __('visit.please_select_a_time_range') }}
                                    </p>
                                </div>
                                <button type="submit" class="visit__date-btn">{{ __('visit.show') }}</button>
                    </form>
                </div>
            </div>
            <div class="visit__table-box">
                <h2 class="visit__table-title">{{ __('visit.upcoming_terms') }}:</h2>

                <table class="visit__table">
                    <thead class="visit__table-head">
                        <tr>
                            <td class="visit__table-day">{{ __('visit.day') }}</td>
                            <td class="visit__table-day">{{ __('visit.hour') }}</td>
                            <td class="visit__table-day">{{ __('visit.doctor') }}</td>
                            <!-- NIE WIEM CZY LEKARZ MA BYC WYBIERANY W INPUCIE CZY W DACIE WIEC DAJE NARAZIE TU I TU -->
                            <td class="visit__table-day">{{ __('visit.reserve') }}</td>
                        </tr>
                    </thead>
                    <tbody class="visit__table-body">
                        @foreach ($terms as $term)
                            <tr class="visit__table-row">

                                <td class="visit__table-column">{{ $term->date_visit }}</td>
                                <td class="visit__table-column">{{ $term->start_visit }}</td>
                                <td class="visit__table-column">{{ $term->doctors->name }}</td>
                                {{-- <td class="visit__table-column"><button class="visit__table-choose">Wybierz</button>
                                    </td> --}}
                                <form method="post" action="{{ route('visits.update', ['visit' => $term->id]) }}">
                                    @csrf
                                    @method('put')
                                    <td class="visit__table-column"><button
                                            class="visit__table-choose">{{ __('visit.reserve') }}</button>
                                    </td>

                                </form>
                            </tr>
                        @endforeach

                    </tbody>

                </table>

                <div class="visit__btn-box d-flex">
                    {{ $terms->links('pagination::simple-default') }}
                </div>
            </div>

        </div>
        </div>

        </div>

    </main>

    <style>
        .visit__background-img {
            background-image: url({{ asset('storage/visit-background_640.jpg') }});
        }

        @media(min-width: 700px) {
            .visit__background-img {
                background-image: url({{ asset('storage/visit-background_1920.jpg') }});
            }
        }
    </style>

    @include('includes._footer')
@endsection
