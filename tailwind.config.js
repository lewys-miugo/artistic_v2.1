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
    variants: {
        extend: {
            display:['group-focus']
        },
    },
    plugins: [require("flowbite/plugin")],
};

