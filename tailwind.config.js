/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        // colors: {
        //     'border-pink': '#C45472',
        // },

        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};

