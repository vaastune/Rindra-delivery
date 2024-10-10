
document.addEventListener('DOMContentLoaded', () => {
    const assignForm = document.querySelector('form[action="assign_driver.php"]');
    if (assignForm) {
        assignForm.addEventListener('submit', (event) => {
            const orderID = assignForm.querySelector('input[name="order_id"]').value;
            const driver = assignForm.querySelector('select[name="driver"]').value;
            const confirmAssign = confirm(`Are you sure you want to assign ${driver} to order #${orderID}?`);
            if (!confirmAssign) {
                event.preventDefault();
            }
        });
    }

    
    const trackForm = document.querySelector('form[action="track_delivery.php"]');
    if (trackForm) {
        trackForm.addEventListener('submit', (event) => {
            const orderID = trackForm.querySelector('input[name="order_id"]').value;
            const confirmTrack = confirm(`Are you sure you want to track order #${orderID}?`);
            if (!confirmTrack) {
                event.preventDefault();
            }
        });
    }
});
