@extends('layouts.app')

@section('content')
{{-- <h1>Events</h1> --}}
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-xxl-12 mb-5 mb-xl-10">
                <div class="float-end">
                    <button id="add-event-button" class="btn btn-primary py-3" data-toggle="modal" data-target="#event-modal">Add Event</button>
                </div>
            </div>
            <!--end::Col-->


            <!--begin::Col-->
            <div class="col-xxl-12 col-md-12 mb-5 mb-xl-10">
                <!--begin::Maps widget 1-->
                <div class="card card-flush h-md-100">
                    <!--begin::Header-->
                    <div class="card-header flex-nowrap pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Events Calendar</span>
                            <span class="text-gray-400 pt-2 fw-semibold fs-6">All events and schedule</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5 ps-6">
                        <div class="p-5" id="calendar"></div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Maps widget 1-->
            </div>
            <!--end::Col-->

            <!-- Event Modal -->
            <!--begin::Modal - New Card-->
            <div id="event-modal" class="modal fade" tabindex="-1" aria-hidden="true" role="dialog" aria-hidden="true" data-backdrop="false">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h1>Event Details</h1>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="event-form" class="kt_modal_new_card_form" method="POST">
                                @csrf
                                <input type="hidden" name="event_id" id="event_id">
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span for="title" class="required">Title</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify event's title"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" id="title" name="title">
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span for="start" class="required">Start Date and Time</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify start date and time"></i>
                                    </label>
                                    <input type="datetime-local" class="form-control form-control-solid" id="start" name="start">
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span for="title" class="required">End Date and Time</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify end date and time"></i>
                                    </label>
                                    <input type="datetime-local" class="form-control form-control-solid" id="end" name="end">
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span for="departments" class="required">Departments</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify event's departments"></i>
                                    </label>
                                    <select multiple class="form-control form-control-solid" id="departments1" name="department_ids[]">

                                    </select>
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span for="rankings" class="required">Rankings</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify event's ranking"></i>
                                    </label>
                                    <select multiple class="form-control form-control-solid" id="rankings1" name="ranking_ids[]">

                                    </select>
                                </div>
                                <!-- <button type="submit" class="btn btn-primary">Save</button> -->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                                    <button type="submit" id="kt_modal_new_card_submit" class="btn submit btn-primary">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->
        </div>
    </div>
</div>
@endsection

{{-- @push('scripts')
    <script src="{{ asset('js/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('js/events.js') }}"></script>
@endpush --}}

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
@endpush