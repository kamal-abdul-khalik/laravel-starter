const mix = require("laravel-mix");

let plugins = [
    "bootstrap",
    "summernote",
    "owl.carousel",
    "@popperjs/core",
    "jquery",
    "jquery-ui-dist",
    "jquery.nicescroll",
    "moment",
    "chart.js",
    "prismjs",
    "dropzone",
    "bootstrap-social",
    "bootstrap-daterangepicker",
    "bootstrap-timepicker",
    "select2",
    "selectric",
    "fullcalendar",
    "datatables",
    "sweetalert",
    "izitoast",
];

plugins.forEach((plugin) => {
    mix.copy("./node_modules/" + plugin, "public/library/" + plugin);
});
