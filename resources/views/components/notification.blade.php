@if (session('success') || session('error') || $errors->any())
    <style>
        .custom-alert {
            position: relative;
            padding: 1rem 1.5rem;
            border: 1px solid transparent;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        

        .alert-success {
            background-color: #d1e7dd;
            border-color: #badbcc;
            color: #0f5132;
        }

        .alert-error,
        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c2c7;
            color: #842029;
        }

        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffecb5;
            color: #664d03;
        }

        .custom-alert i {
            font-size: 1.25rem;
        }

        .close-alert {
            position: absolute;
            right: 1rem;
            top: 0.75rem;
            font-size: 1.2rem;
            cursor: pointer;
        }

        #alert-container {
            position: absolute !important;
            top: 44px !important;
            width: 100% !important;
            max-width: 500px !important;
            right: 0 !important;
            z-index: 1001 !important;
        }
    </style>

    <div id="alert-container">
        {{-- Success Alert --}}
        @if (session('success'))
            <div class="custom-alert alert-success">
                <i class="fas fa-check-circle"></i>
                <span><strong>Success:</strong> {{ session('success') }}</span>
                <span class="close-alert" onclick="this.parentElement.remove()">&times;</span>
            </div>
        @endif

        {{-- Error Alert --}}
        @if (session('error'))
            <div class="custom-alert alert-error">
                <i class="fas fa-exclamation-triangle"></i>
                <span><strong>Error:</strong> {{ session('error') }}</span>
                <span class="close-alert" onclick="this.parentElement.remove()">&times;</span>
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="custom-alert alert-warning">
                <i class="fas fa-info-circle"></i>
                <div>
                    <strong>Oops! Please fix the following:</strong>
                    <ul class="mt-1 list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <span class="close-alert" onclick="this.parentElement.remove()">&times;</span>
            </div>
        @endif
    </div>

    <script>
        // Auto-hide after 5 seconds
        setTimeout(() => {
            document.querySelectorAll('.custom-alert').forEach(el => {
                el.style.transition = 'opacity 0.5s ease';
                el.style.opacity = 0;
                setTimeout(() => el.remove(), 500);
            });
        }, 5000);
    </script>
@endif
