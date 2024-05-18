@extends('app')
@section('section')
    <div class="col-8 mx-auto mt-5">
        <div class="row">
            @foreach ($plans as $p)
                <div class="col-4">
                    <div class="card py-5">
                        <div class="card-body text-center">
                            <h2 class="mb-3 fw-bold">${{ $p->amount }}</h2>
                            <p class="mb-4">{{ $p->name }}</p>
                            <button class="btn btn-dark rounded-4 suscribed-btn" data-bs-toggle="modal"
                                data-bs-target=".exampleModal" data-id="{{ $p->id }}">Subscribe</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="modal fade exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Subscription Plan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-4 " data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark rounded-4 ">Continue</button>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script type="module">
            $(document).ready(function() {
                $('.suscribed-btn').click(function(e) {
                    $('.modal-body').html(`<div class="text-center">
                        <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                    </div>`)
                    e.preventDefault();
                    let plan_id = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('get.plan.data') }}",
                        data: {
                            id: plan_id
                        },
                        success: function(response) {
                            $('.modal-body').html(response);
                        }
                    });

                });
            });
        </script>
    @endpush
@endsection
