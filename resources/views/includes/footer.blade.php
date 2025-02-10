    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <script src="{{ asset('assets/dist/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')

    @if (session('success'))
        <script>
            Swal.fire({
                title: 'نجاح!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'موافق'
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: 'خطأ في الإدخال!',
                    html: `
                        <ul style="text-align: right; direction: rtl;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    `,
                    icon: 'error',
                    confirmButtonText: 'موافق'
                });
            });
        </script>
    @endif
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    let userId = this.getAttribute('data-id');
                    let form = document.getElementById('delete-form-' + userId);

                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: "لن تتمكن من التراجع عن هذا الإجراء!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        cancelButtonText: 'إلغاء',
                        confirmButtonText: 'نعم، احذف !'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#global-loader').show();
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    let href = link.getAttribute('href');  
                    if (href && href !== "#" && !href.startsWith("javascript:")) {
                        $('#global-loader').show();
                    }
                });
            });
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function() {
                    $('#global-loader').show();
                });
            });
        });
    </script>
    @livewireScripts
    </body>

    </html>
