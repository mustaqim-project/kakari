<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lazyImages = document.querySelectorAll('img.lazy');

        function handleLazyLoad() {
            lazyImages.forEach(img => {
                if (img.getBoundingClientRect().top < window.innerHeight && img.getBoundingClientRect().bottom >= 0) {
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    img.classList.add('loaded');
                }
            });
        }

        window.addEventListener('scroll', handleLazyLoad);
        window.addEventListener('resize', handleLazyLoad);
        handleLazyLoad(); // Initial check
    });

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    // Add csrf token in ajax request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('#site-language').on('change', function() {
            let languageCode = $(this).val();
            $('html').attr('lang', languageCode);
            $.ajax({
                method: 'GET',
                url: "{{ route('language') }}",
                data: {
                    language_code: languageCode
                },
                success: function(data) {
                    if (data.status === 'success') {
                        window.location.href = "{{ url('/') }}";
                    }
                },
                error: function(data) {
                    console.error(data);
                }
            });
        });

        $('#nav-side-site-language').on('change', function() {
            let languageCode = $(this).val();
            $('html').attr('lang', languageCode);
            $.ajax({
                method: 'GET',
                url: "{{ route('language') }}",
                data: {
                    language_code: languageCode
                },
                success: function(data) {
                    if (data.status === 'success') {
                        window.location.href = "{{ url('/') }}";
                    }
                },
                error: function(data) {
                    console.error(data);
                }
            });
        });

        /** Subscribe Newsletter**/
        $('.newsletter-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                method: 'POST',
                url: "{{ route('subscribe-newsletter') }}",
                data: $(this).serialize(),
                beforeSend: function() {
                    $('.newsletter-button').text('loading...');
                    $('.newsletter-button').attr('disabled', true);
                },
                success: function(data) {
                    if (data.status === 'success') {
                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        $('.newsletter-form')[0].reset();
                        $('.newsletter-button').text('sign up');
                        $('.newsletter-button').attr('disabled', false);
                    }
                },
                error: function(data) {
                    $('.newsletter-button').text('sign up');
                    $('.newsletter-button').attr('disabled', false);

                    if (data.status === 422) {
                        let errors = data.responseJSON.errors;
                        $.each(errors, function(index, value) {
                            Toast.fire({
                                icon: 'error',
                                title: value[0]
                            })
                        })
                    }
                }
            })
        })
    });

    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = themeToggle.querySelector('i');

    // Check for saved theme preference or use preferred color scheme
    const savedTheme = localStorage.getItem('theme') ||
        (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    document.documentElement.setAttribute('data-theme', savedTheme);

    // Update icon based on current theme
    if (savedTheme === 'dark') {
        themeIcon.classList.replace('fa-moon', 'fa-sun');
    }

    // Toggle theme on button click
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';

        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        if (newTheme === 'dark') {
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        } else {
            themeIcon.classList.replace('fa-sun', 'fa-moon');
        }
    });

    function openTab(evt, tabName) {
        const tabContents = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.remove("active");
        }

        const tabButtons = document.getElementsByClassName("tab-button");
        for (let i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
        }

        document.getElementById(tabName).classList.add("active");
        evt.currentTarget.classList.add("active");
    }

    function openEkoranModal(slideIndex) {
        // Initialize modal slider
        var modalSlider = new bootstrap.Carousel(document.getElementById('ekoranModalSlider'));

        // Go to the clicked slide
        modalSlider.to(slideIndex);

        // Show modal
        var modal = new bootstrap.Modal(document.getElementById('ekoranModal'));
        modal.show();
    }
</script>
