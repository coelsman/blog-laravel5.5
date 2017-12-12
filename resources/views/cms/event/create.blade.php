@extends('cms.layouts.app')
@section('content')
    @section('stylesheets')
        <link rel="stylesheet" type="text/css" href="libs/bootstrap-datetimepicker.css">
    @stop
    <div class="container">
        <h2>Create Event</h2>

        <form action="" method="POST">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Event Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Start Time</label>
                        <input type="text" name="start_time" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Ticket Prize (£)</label>
                        <input type="text" name="ticket_prize" class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>End Time</label>
                        <input type="text" name="end_time" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Sale Ticket Prize (£)</label>
                        <input type="text" name="sale_ticket_prize" class="form-control">
                    </div>
                </div>

                <div class="clearfix">
                    <div class="col-sm-4 form-group">
                        <label>Hour for Sale</label>
                        <input type="text" name="hours_sale" class="form-control">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label>Attends</label>
                        <input type="text" name="attends" class="form-control">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label>Emails</label>
                        <input type="text" name="emails" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" name="save" class="btn btn-success">Save</button>
        </form>
    </div>

    @section('scripts')
        <script src="libs/moment-with-locales.js"></script>
        <script src="libs/bootstrap-datetimepicker.js"></script>
    @stop
@stop
