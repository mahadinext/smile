<!-- JAVASCRIPT -->
<script src="{!! asset('theme/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('theme/admin/assets/libs/simplebar/simplebar.min.js') !!}"></script>
<script src="{!! asset('theme/admin/assets/libs/node-waves/waves.min.js') !!}"></script>
<script src="{!! asset('theme/admin/assets/libs/feather-icons/feather.min.js') !!}"></script>
<script src="{!! asset('theme/admin/assets/js/pages/plugins/lord-icon-2.1.0.js') !!}"></script>
<script src="{!! asset('theme/admin/assets/js/plugins.js') !!}"></script>

<!--Jquery-->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

<script src="{!! asset('theme/admin/assets/js/pages/datatables.init.js') !!}"></script>

<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{!! asset('theme/admin/assets/js/pages/select2.init.js') !!}"></script>

<!-- App js -->
<script src="{!! asset('theme/admin/assets/js/app.js') !!}"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr(".datetimepicker", {
        enableTime: true,
        // dateFormat: "Y-m-d H:i",
        noCalendar: false,
        dateFormat: "Y-m-d H:i:S", // Change to include seconds
        time_24hr: true, // Optional: to use 24-hour time format
        enableSeconds: true // Enable seconds in the picker
    });
</script>

{{-- Bootstrap Color Pickr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>

{{-- <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.15.3/dist/echo.iife.js"></script>
<script>
    window.Echo.private(`notifications.{{ auth()->id() }}`)
    .listen('new-notification', (data) => {
        // Update UI with notification
        const list = document.getElementById('notification-list');
        const item = document.createElement('a');
        item.className = 'dropdown-item';
        item.href = '#';
        item.textContent = data.message;
        list.prepend(item);
    });
</script> --}}

<!-- Add at the bottom of your file, before closing body tag -->
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.15.3/dist/echo.iife.js"></script>

<script>
    // Initialize Echo
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ env('PUSHER_APP_KEY') }}',
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        encrypted: true
    });

    // Template for notification item
    function createNotificationItem(data) {
        return `
            <div class="text-reset notification-item d-block dropdown-item position-relative">
                <div class="d-flex">
                    <div class="avatar-xs me-3 flex-shrink-0">
                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                            <i class="bx bx-bell"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1">
                        <a href="#!" class="stretched-link">
                            <h6 class="mt-0 mb-2 lh-base">${data.message}</h6>
                        </a>
                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                            <span><i class="mdi mdi-clock-outline"></i> ${data.time || 'Just now'}</span>
                        </p>
                    </div>
                    <div class="px-2 fs-15">
                        <div class="form-check notification-check">
                            <input class="form-check-input" type="checkbox" value=""
                                   id="notification-${Date.now()}">
                            <label class="form-check-label"
                                   for="notification-${Date.now()}"></label>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Listen for notifications
    window.Echo.private(`notifications.{{ auth()->id() }}`)
    .listen('new-notification', (data) => {
        // Update notification count
        updateNotificationCount(1);

        // Add new notification to the list
        const allNotificationsTab = document.querySelector('#all-noti-tab [data-simplebar]');
        allNotificationsTab.insertAdjacentHTML('afterbegin', createNotificationItem(data));
    });

    // Function to update notification counts
    function updateNotificationCount(increment = 0) {
        const badges = {
            topbar: document.querySelector('.topbar-badge'),
            dropdown: document.querySelector('.dropdown-tabs .badge'),
            allTab: document.querySelector('[href="#all-noti-tab"]')
        };

        let currentCount = parseInt(badges.topbar.textContent);
        let newCount = increment ? currentCount + increment : currentCount;

        badges.topbar.textContent = newCount;
        badges.dropdown.textContent = `${newCount} New`;
        badges.allTab.textContent = `All (${newCount})`;
    }

    // Load initial notifications
    function loadNotifications() {
        fetch('/notifications/get')
            .then(response => response.json())
            .then(data => {
                const allNotificationsTab = document.querySelector('#all-noti-tab [data-simplebar]');
                allNotificationsTab.innerHTML = ''; // Clear existing notifications

                data.notifications.forEach(notification => {
                    allNotificationsTab.insertAdjacentHTML('beforeend',
                        createNotificationItem({
                            message: notification.data.message,
                            time: timeAgo(notification.created_at)
                        })
                    );
                });

                updateNotificationCount(data.notifications.length);
            });
    }

    // Helper function to format time ago
    function timeAgo(datetime) {
        const date = new Date(datetime);
        const now = new Date();
        const seconds = Math.floor((now - date) / 1000);

        if (seconds < 60) return 'Just now';
        if (seconds < 3600) return Math.floor(seconds / 60) + ' min ago';
        if (seconds < 86400) return Math.floor(seconds / 3600) + ' hours ago';
        return Math.floor(seconds / 86400) + ' days ago';
    }

    // Load notifications when page loads
    document.addEventListener('DOMContentLoaded', loadNotifications);
</script>
