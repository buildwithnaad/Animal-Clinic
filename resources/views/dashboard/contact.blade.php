@extends('layouts.dashboard')
@section('title', 'Contact Messages')
@section('dash-body')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <h4 class="page-title mt-4">Contact Messages</h4>
                </div>
            </div>

            <!-- Contact Messages Table -->
            <div class="card-body">

                @if (session()->get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> {{ session()->get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session()->get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success:</strong> {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="p-3">
                    <h2 class="text-2xl font-bold text-green-700 mb-3">Contact Messages</h2>

                    <div class="table-responsive rounded">
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($messages as $msg)
                                    <tr>
                                        <td>{{ $msg->name }}</td>
                                        <td>{{ $msg->email }}</td>
                                        <td>{{ $msg->subject }}</td>
                                        <td title="{{ $msg->message }}">{{ Str::limit($msg->message, 100, '...') }}</td>
                                        <td class="text-center">
                                            <!-- Reply Button -->
                                            <a href="mailto:{{ $msg->email }}?subject=Reply: {{ $msg->subject }}"
                                                class="btn btn-sm btn-primary">
                                                Reply
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('contact.message.destroy', $msg->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this message?');"
                                                class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">No contact messages found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>

            </div> <!-- end card body-->

        </div><!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-md-right justify-content-end d-none d-sm-block">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> - Developed By <strong><a href="" target="_blank">Naad Ali</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

@endsection
