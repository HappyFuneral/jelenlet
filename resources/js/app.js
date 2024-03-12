import Alpine from 'alpinejs';
import parsley from 'parsleyjs';
import flatpickr from "flatpickr";

window.Alpine = Alpine;

Alpine.start();

flatpickr(".date-flatpickr",
{
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});
